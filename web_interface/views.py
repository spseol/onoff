from flask import (render_template, flash, redirect, url_for, request,
                   Markup)
from . import app, login_manager
from .forms import (LoginForm, DomainForm, PortForm,
                    AliveDeleteForm, ListAliveDeleteForm,
                    ModeForm, ListModeForm)
from flask_login import (login_user, logout_user, current_user, login_required)
from .models import User, Mode, Domain, Loginlog, Room, Station
from pony.orm import db_session, select
from pony.orm.core import TransactionIntegrityError
from time import sleep
from datetime import datetime
from subprocess import call
from pygments import highlight
from pygments.lexers import SquidConfLexer
from pygments.formatters import HtmlFormatter
############################################################################


@app.context_processor
def get_variables():
    "Proměnné, které budou dostupné v šablonách."
    with db_session:
        rooms = sorted(select(r.name for r in Room))
    return (dict(rooms=rooms,
                 )
            )


@login_manager.user_loader
def user_loader(name):
    with db_session:
        user = User.get(name=name)
        user.role_name = user.role.name
    return user
############################################################################


@app.route('/')
@login_required
def index():
    return render_template('base.html')


@app.route('/onoff/', methods=['GET', 'POST'])
@login_required
def onoff():
    dform_on = DomainForm(prefix='on')
    dform_teach = DomainForm(prefix='teach')

    try:
        #  On domains forms
        if dform_on.submit.data and dform_on.validate_on_submit():
            with db_session:
                Domain(string=dform_on.string.data,
                       permit=False,
                       user=User.get(name=current_user.name),
                       mode=Mode.get(name='On'),
                       alive=dform_on.alive.data,
                       regexp=dform_on.regexp.data,
                       ipaddress=dform_on.ipaddress.data
                       )
            return redirect(url_for('onoff')+"#on")

        #  Tech domains forms
        if dform_teach.submit.data and dform_teach.validate_on_submit():
            with db_session:
                Domain(string=dform_teach.string.data,
                       permit=True,
                       user=User.get(name=current_user.name),
                       mode=Mode.get(name='Teach'),
                       alive=dform_teach.alive.data,
                       regexp=dform_teach.regexp.data,
                       ipaddress=dform_teach.ipaddress.data
                       )
            return redirect(url_for('onoff')+"#teach")
    except TransactionIntegrityError:
        flash("Není možné vložit dvě stejné domény!", 'error')
        return redirect(url_for('onoff'))

    lform_on = ListAliveDeleteForm(prefix='on')
    lform_teach = ListAliveDeleteForm(prefix='teach')

    # On vymazání domén
    if lform_on.validate_on_submit() and lform_on.deleteBtn.data:
        with db_session:
            for subform in lform_on.switches:
                if subform.delete.data:
                    Domain[subform.table_id.data].delete()
        return redirect(request.path+'#on')
    # Teach vymazání domén
    if lform_teach.validate_on_submit() and lform_teach.deleteBtn.data:
        with db_session:
            for subform in lform_teach.switches:
                if subform.delete.data:
                    Domain[subform.table_id.data].delete()
        return redirect(request.path+'#teach')

    # On Aktivace/Deaktivace
    if lform_on.validate_on_submit() and lform_on.aliveBtn.data:
        with db_session:
            for subform in lform_on.switches:
                if subform.alive.data:
                    Domain[subform.table_id.data].alive = True
                else:
                    Domain[subform.table_id.data].alive = False
        return redirect(request.path+'#on')
    # Teach Aktivace/Deaktivace
    if lform_teach.validate_on_submit() and lform_teach.aliveBtn.data:
        with db_session:
            for subform in lform_teach.switches:
                if subform.alive.data:
                    Domain[subform.table_id.data].alive = True
                else:
                    Domain[subform.table_id.data].alive = False
        return redirect(request.path+'#teach')

    with db_session:
        list_on = select((d.id, d.string, d.alive, d.regexp, d.ipaddress)
                         for d in Domain if d.mode.name == 'On')[:]
        list_teach = select((d.id, d.string, d.alive, d.regexp, d.ipaddress)
                            for d in Domain if d.mode.name == 'Teach')[:]

    for table_id, string, alive, regexp, ipaddress in list_on:
        switch = AliveDeleteForm()
        switch.table_id = table_id
        switch.alive = alive
        switch.regexp = regexp
        switch.ipaddress = ipaddress
        switch.delete = False
        switch.string = string
        lform_on.switches.append_entry(switch)

    for table_id, string, alive, regexp, ipaddress in list_teach:
        switch = AliveDeleteForm()
        switch.table_id = table_id
        switch.alive = alive
        switch.regexp = regexp
        switch.ipaddress = ipaddress
        switch.delete = False
        switch.string = string
        lform_teach.switches.append_entry(switch)

    return render_template('setings.html',
                           lform_on=lform_on, lform_teach=lform_teach,
                           dform_on=dform_on, dform_teach=dform_teach,
                           full_pform=PortForm(mode='full'),
                           )


@app.route('/<regex("LP[13456]|MIT"):lab>/', methods=['GET', 'POST'])
@login_required
def place(lab):
    import os
    print(os.getcwd())
    form = ListModeForm()

    if form.validate_on_submit():
        with db_session:
            for subform in form.switches:
                mode = Mode.get(name=subform.mode.data.capitalize())
                Station[subform.table_id.data].mode = mode
        ret = call(['./make_squid_conf.sh', current_user.name, lab.lower()])
        if ret == 0:
            flash('Konfigurace byla změněna.')
        else:
            flash('Natala chybička')
        return redirect(request.path)

    with db_session:
        for station in select(s for s in Station if s.room.name == lab
                              ).order_by(Station.address):
            switch = ModeForm()
            switch.table_id = station.id
            switch.address = station.address
            switch.mode = station.mode.name.lower()
            form.switches.append_entry(switch)

    with open(lab.lower()+'.conf') as f:
        conf = f.read()
    conf = Markup(highlight(conf, SquidConfLexer(), HtmlFormatter()))
    return render_template('lab.html', lab=lab, form=form, conf=conf)


@app.route('/login/', methods=['GET', 'POST'])
def login():
    def sorry():
        with db_session:
            Loginlog(name=name,
                     time=datetime.now(),
                     address=request.remote_addr,
                     wrong_passwd=passwd)
        flash(':-( Sorry, ale nepodařilo se mi tě ověřit.')
        sleep(7)
    if current_user.is_authenticated:
        flash(Markup('Už jsi přihlášen! <a href="{}">Odhlásit</a>'
                     ''.format(url_for('logout'))))
        return redirect(url_for('index'))
    form = LoginForm()
    if form.validate_on_submit():
        name = form.name.data
        passwd = form.passwd.data
        with db_session:
            user = User.get(name=name)
        if user:
            from ldap3 import Server, Connection, ALL, NTLM
            from config import ldap_server
            server = Server(ldap_server, get_info=ALL)
            conn = Connection(server,
                              user="spseol.cz\\{}".format(name),
                              password=passwd,
                              authentication=NTLM)
            # if name == 'nozka' or name == 'stejskal':
            if conn.bind():
                login_user(user, remember=form.remember_me.data)
                flash("Právě jsi se přihlásil!")
                next = request.args.get('next')
                if next:
                    return redirect(next)
                else:
                    return redirect(url_for('index'))
            else:  # špatné heslo
                sorry()
        else:  # neoprávněný uživatel
            sorry()
            return redirect(url_for('login'))
    return render_template('login.html', form=form)


@app.route('/logout')
def logout():
    if current_user.get_id():
        logout_user()
        flash('Byl jsi odhlášen!')
    return redirect(url_for('login'))


@app.errorhandler(404)
def page_not_found(error):
    print(error.code)
    print(error.name)
    print(error.description)
    return render_template('404.html', e=error), 404


# @app.route('/mail/')
# def mail():
#     from web_interface import mail
#     from flask.ext.mail import Message
#     msg = Message('Přemět',
#                   sender='nozka@spseol.cz',
#                   recipients=['nozka@spseol.cz', ])
#     msg.body = 'Toto je důležitá zpráva'
#     mail.send(msg)
#     return render_template('base.html')

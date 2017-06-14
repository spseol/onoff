from flask import (render_template, flash, redirect, url_for, request,
                   Markup)
from . import app, login_manager
from .forms import LoginForm, DomainForm, PortForm
from flask_login import (login_user, logout_user, current_user, login_required)
from .models import User, Mode, Domain, Loginlog, Room
from pony.orm import db_session, select
from pony.orm.core import TransactionIntegrityError
from radius import RADIUS
from time import sleep
from datetime import datetime

############################################################################
@app.context_processor
def get_variables():
    "Proměnné, které budou dostupné v šablonách."
    with db_session:
        rooms=sorted( select(r.name for r in Room))
    return (dict(
                 rooms=rooms,
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
    
    if request.method == 'POST':
        try:
            #  On domains forms
            if dform_on.submit.data and dform_on.validate_on_submit():
                with db_session:
                    Domain(string=dform_on.string.data,
                        permit=False,
                        user=User.get(name=current_user.name),
                        mode=Mode.get(name='on'),
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
                        mode=Mode.get(name='teach'),
                        alive=dform_teach.alive.data,
                        regexp=dform_teach.regexp.data,
                        ipaddress=dform_teach.ipaddress.data
                        )
                return redirect(url_for('onoff')+"#teach")
        except TransactionIntegrityError:
            flash("Není možné vložit dvě stejné domény!", 'error')
            return redirect(url_for('onoff'))
    elif request.method == 'GET':
        with db_session:
            list_on = select((d.id, d.string, d.alive, d.regexp, d.ipaddress)
                            for d in Domain if d.mode.name == 'on')[:]
            list_teach = select((d.id, d.string, d.alive, d.regexp, d.ipaddress)
                            for d in Domain if d.mode.name == 'teach')[:]
        return render_template('onoff.html',
                            list_on=list_on, list_teach=list_teach,
                            dform_on=dform_on, dform_teach=dform_teach,
                            full_pform=PortForm(mode='full'),
                            )


@app.route('/domainadd/', methods=['POST'])
@login_required
def domainadd():
    dform_on = DomainForm()
    if dform_on.validate_on_submit():
        name = dform_on.name.data
        mode = dform_on.mode.data
        force = dform_on.force.data
        print()
        print(name, mode, force)
        print()
        dform_on.name.data = ''
    return redirect(url_for('onoff'))


@app.route('/<regex("LP[13456]|MIT"):lab>/')
@login_required
def place(lab):
    if "LP" in lab:
        flash(lab, 'noerror')
    if "1" in lab:
        flash("Jednička")
    return render_template('base.html')


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
            rad = RADIUS(app.config['RAD_SECRET'],
                         app.config['RAD_SERVER'],
                         app.config['RAD_PORT'])
            if name == 'nozka' or name == 'stejskal' or \
               rad.authenticate(name.encode('ascii'), passwd.encode('ascii')):
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

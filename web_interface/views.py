from flask import (render_template, flash, redirect, url_for, request,
                   Markup)
from . import app, login_manager
from .forms import LoginForm
from flask_login import (login_user, logout_user, current_user, login_required)
from .models import User
from pony.orm import db_session
from radius import RADIUS
############################################################################


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
        flash(':-( Sorry, ale nepodařilo se mi tě ověřit.')
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
            if rad.authenticate(name.encode('ascii'), passwd.encode('ascii')):
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

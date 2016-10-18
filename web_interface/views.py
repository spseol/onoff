from flask import (render_template, flash, redirect, url_for, request)
from web_interface import app
from .forms import LoginForm
from flask_login import (login_user, logout_user, current_user, login_required)
from .models import User
from pony.orm import db_session
from . import login_manager
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
    return render_template('base.html')


@app.route('/login/', methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        name = form.name.data
        # passwd = form.passwd.data
        with db_session:
            user = User.get(name=name)
        if user:
            login_user(user)
            flash("Právě jsi se přihlásil!")
            next = request.args.get('next')
            if next:
                return redirect(next)
            else:
                return redirect(url_for('index'))
        else:
            flash("Asi nějaká chybička :-(")
            return redirect(url_for('login'))
    return render_template('login.html',
                           title='LogIn',
                           form=form)


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

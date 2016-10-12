from flask import (render_template, flash, redirect, url_for)
from web_interface import app
from .forms import LoginForm
############################################################################


@app.route('/')
def index():
    return render_template('base.html')


@app.route('/<regex("LP[13456]|MIT"):lab>/')
def place(lab):
    if "LP" in lab:
        flash(lab, 'noerror')
    return render_template('base.html')


@app.route('/mail/')
def mail():
    from web_interface import mail
    from flask.ext.mail import Message
    msg = Message('Přemět',
                  sender='nozka@spseol.cz',
                  recipients=['nozka@spseol.cz', ])
    msg.body = 'Toto je důležitá zpráva'
    mail.send(msg)
    return render_template('base.html')


@app.route('/login/', methods=['GET', 'POST'])
def login():
    form = LoginForm()
    if form.validate_on_submit():
        flash('Login requested for OpenID="%s", remember_me=%s' %
              (form.name.data, str(form.passwd.data)))
        return redirect(url_for('index'))
    return render_template('login.html',
                           title='LogIn',
                           form=form)


@app.errorhandler(404)
def page_not_found(error):
    print(error.code)
    print(error.name)
    print(error.description)
    return render_template('404.html', e=error), 404

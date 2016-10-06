from flask.ext.wtf import FlaskForm
from wtforms import (StringField, PasswordField, BooleanField)
from wtforms.validators import DataRequired


class LoginForm(FlaskForm):
    name = StringField('name', validators=[DataRequired()])
    passwd = PasswordField('passwd', validators=[DataRequired()])
    remember_me = BooleanField('remember_me', default=False)

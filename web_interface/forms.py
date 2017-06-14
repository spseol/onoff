from flask_wtf import FlaskForm
from wtforms import (StringField, PasswordField, BooleanField,
                     HiddenField, IntegerField, SubmitField,)
from wtforms.validators import DataRequired


class LoginForm(FlaskForm):
    name = StringField('name', validators=[DataRequired()])
    passwd = PasswordField('passwd', validators=[DataRequired()])
    remember_me = BooleanField('remember_me', default=False)


class PortForm(FlaskForm):
    number = IntegerField('number', validators=[DataRequired()])
    mode = HiddenField('mode', validators=[DataRequired()])
    permit = BooleanField('permit', default=False)
    force = BooleanField('force', default=False)
    alive = BooleanField('alive', default=True)


class DomainForm(FlaskForm):
    string = StringField('string', validators=[DataRequired()])
    # mode = HiddenField('mode', validators=[DataRequired()])
    alive = BooleanField('alive', default=True)
    regexp = BooleanField('regexp', default=False)
    ipaddress = BooleanField('ipaddress', default=False)
    submit = SubmitField('Přidat')

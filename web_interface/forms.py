from flask_wtf import FlaskForm
from wtforms import (StringField, PasswordField, BooleanField,
                     HiddenField, IntegerField, SubmitField,
                     FieldList, FormField, Field, RadioField
                     )
from wtforms.validators import InputRequired, IPAddress
# from wtforms.widgets import HTMLString
from pony.orm import db_session, select
from .models import Mode


def myIPvalidator(form, field):
    if form.ipaddress.data:
        validator = IPAddress()
        validator(form, field)


class LoginForm(FlaskForm):
    name = StringField('name', validators=[InputRequired()])
    passwd = PasswordField('passwd', validators=[InputRequired()])
    remember_me = BooleanField('remember_me', default=False)


class DomainForm(FlaskForm):
    string = StringField('string', validators=[InputRequired(), myIPvalidator])
    mode = HiddenField('mode', default="bagr")
    alive = BooleanField('alive', default=True)
    regexp = BooleanField('regexp', default=False)
    ipaddress = BooleanField('ipaddress', default=False)
    submit = SubmitField('Přidat')


class PortForm(FlaskForm):
    number = IntegerField('number', validators=[InputRequired()])
    mode = HiddenField('mode', validators=[InputRequired()])
    permit = BooleanField('permit', default=False)
    force = BooleanField('force', default=False)
    alive = BooleanField('alive', default=True)


class AliveDeleteForm(FlaskForm):
    table_id = HiddenField('table_id', validators=[InputRequired()])
    alive = BooleanField('alive', default=True)
    delete = BooleanField('delete', default=False)
    string = Field()
    regexp = Field()
    ipaddress = Field()


class ListAliveDeleteForm(FlaskForm):
    switches = FieldList(FormField(AliveDeleteForm))
    aliveBtn = SubmitField('Aktivovat a deaktivovat')
    deleteBtn = SubmitField('Vymazat vybrané')


# choices = []
# with db_session:
#     for name in select(m.name for m in Mode):
#         choices += [(name.lower(), name)]


class ModeForm(FlaskForm):
    table_id = HiddenField('table_id', validators=[InputRequired()])
    address = HiddenField('address', validators=[InputRequired()])
    # mode = RadioField('mode', choices=choices)
    mode = RadioField('mode')

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        choices = []
        with db_session:
            for id, name in select((m.id, m.name) for m in Mode).order_by(1):
                choices += [(name.lower(), name)]
        self.mode.choices = choices


class ListModeForm(FlaskForm):
    switches = FieldList(FormField(ModeForm))
    submit = SubmitField('Odeslat')

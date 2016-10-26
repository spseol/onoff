#!/usr/bin/env python3
# Soubor:  __init__.py
# Úloha:  Flask -- aplikace
############################################################################
from flask import Flask
app = Flask(__name__)
app.config.from_object('config')

from flaskext.markdown import Markdown
markdown = Markdown(app, extensions=['extra',
                                     'toc(baselevel=2)',
                                     'smarty',
                                     ])

from flask_mail import Mail
mail = Mail(app)

from flask_login import LoginManager
login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = 'login'

from .models import db
db.generate_mapping(create_tables=True, check_tables=True)


###############################################################################
from werkzeug.routing import BaseConverter


class RegexConverter(BaseConverter):

    def __init__(self, url_map, *items):
        super(RegexConverter, self).__init__(url_map)
        self.regex = items[0]

app.url_map.converters['regex'] = RegexConverter

###############################################################################

from . import views

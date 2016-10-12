#!/usr/bin/env python3
# Soubor:  __init__.py
# Úloha:  Flask -- aplikace
############################################################################
from flask import Flask
from werkzeug.routing import BaseConverter

app = Flask(__name__)
app.config.from_object('config')

import flask_login
login_manager = flask_login.LoginManager()
login_manager.init_app(app)


###############################################################################

class RegexConverter(BaseConverter):

    def __init__(self, url_map, *items):
        super(RegexConverter, self).__init__(url_map)
        self.regex = items[0]

app.url_map.converters['regex'] = RegexConverter

###############################################################################

from web_interface import views

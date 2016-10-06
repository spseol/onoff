#!/usr/bin/env python3
# Soubor:  __init__.py
# Úloha:  Flask -- aplikace
############################################################################
from flask import Flask

app = Flask(__name__)
app.config.from_object('config')

import flask_login
login_manager = flask_login.LoginManager()
login_manager.init_app(app)

from web_interface import views

#!/usr/bin/env python3
# Soubor:  __init__.py
# Úloha:  Flask -- aplikace
############################################################################
from flask import Flask
from flaskext.markdown import Markdown
from flask_mail import Mail
from flask_login import LoginManager
from werkzeug.routing import BaseConverter


app = Flask(__name__)
app.config.from_object('config')

markdown = Markdown(app, extensions=['extra',
                                     'toc(baselevel=2)',
                                     'smarty',
                                     ])

mail = Mail(app)

login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = 'login'


###############################################################################

class RegexConverter(BaseConverter):

    def __init__(self, url_map, *items):
        super(RegexConverter, self).__init__(url_map)
        self.regex = items[0]

app.url_map.converters['regex'] = RegexConverter

###############################################################################

from web_interface import views

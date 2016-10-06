from flask import (render_template, )
from web_interface import app
############################################################################


@app.route('/')
def index():
    return render_template('base.html')


@app.route('/login/')
def super():
    text = "Dnes je máme programování, což mi udělalo velikou radost :-)"
    return render_template('super.html', text=text)


@app.errorhandler(404)
def page_not_found(error):
    print(error.code)
    print(error.name)
    print(error.description)
    return render_template('404.html', e=error), 404

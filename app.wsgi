import os
import sys

VENVNEME = 'venv-onoff'

DIR = os.path.dirname(__file__)
if DIR == '':
    DIR = '.'
VENV = os.path.join(DIR, VENVNEME)
THIS = os.path.join(VENV, 'bin/activate_this.py')
activate = os.path.join(DIR, 'activate_this.py')
exec(open(activate).read(), {'__file__': THIS})

sys.path.insert(0, DIR)

import apache_onoff
application = apache_onoff.app

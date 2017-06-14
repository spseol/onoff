#!/usr/bin/env python3
# Soubor: run.py
# Úloha:  Run Flask App
############################################################################
from web_interface import app
import sys

PORT = 56789

if len(sys.argv) > 1:
    # Run web public server
    if len(sys.argv) > 2 and sys.argv[2].lower() == 'debug':
        debug = True
    else:
        debug = False

    try:
        PORT = int(sys.argv[1])
        if PORT < 1024 or PORT > 65535:
            sys.stderr.write('Error: '
                             'Port number must between 1024 and 65535!\n')
            exit(1)
    except ValueError:
        sys.stderr.write('Error: Port must be number!\n')
        exit(1)

    # Folowing lines sets parallel logging to stdout and to file.
    from logging import getLogger, DEBUG, StreamHandler, FileHandler
    import os
    import datetime

    logger = getLogger()
    logger.setLevel(DEBUG)

    log_dir = os.path.dirname(__file__)
    file_name = os.path.basename(__file__)
    (file_name, file_ext) = os.path.splitext(file_name)
    log_file = ''.join([log_dir, '/', file_name, '.log'])
    print('Logging in ', log_file)
    file_handler = FileHandler(log_file)

    console_handler = StreamHandler()
    logger.addHandler(file_handler)
    logger.addHandler(console_handler)

    now = datetime.datetime.now()
    logger.info(now.strftime("%Y-%m-%d %H:%M:%S"))
    # Run web public server
    app.run(host='0.0.0.0', port=PORT, debug=debug,
            # ssl_context='adhoc',
            threaded=True)
else:
    # Run web local server
    app.run(host='127.0.0.1', port=PORT, debug=True)

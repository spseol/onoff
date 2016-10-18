#!/usr/bin/env python3
# Soubor:  init_db.py
# Datum:   18.10.2016 14:07
# Autor:   Marek Nožka, nozka <@t> spseol <d.t> cz
# Licence: GNU/GPL
# Úloha:   inicializace Databáze
###########################################################################
from web_interface.models import User, Role
from pony.orm import db_session

# db.generate_mapping(create_tables=False)

admins = 'nozka burda vakri kolar'.split()
teachers = 'stejskal sovakova gebova baranek vesela'.split()


with db_session:
    role_admin = Role.get(name='admin') or Role(name='admin')
    role_teacher = Role.get(name='teacher') or Role(name='teacher')

    for name in admins:
        u = User.get(name=name) or User(name=name, role=role_admin)
    for name in teachers:
        u = User.get(name=name) or User(name=name, role=role_teacher)

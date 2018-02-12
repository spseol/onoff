#!/usr/bin/env python3
# Soubor:  init_db.py
# Datum:   18.10.2016 14:07
# Autor:   Marek Nožka, nozka <@t> spseol <d.t> cz
# Licence: GNU/GPL
# Úloha:   inicializace Databáze
###########################################################################
from web_interface.models import User, Role, Mode, Room, Station
from pony.orm import db_session

from config import admins, teachers

modes = 'Full On Teach Off'.split()

rooms = 'LP1 LP3 LP4 LP5 LP6 MIT'.split()


with db_session:
    role_admin = Role.get(name='admin') or Role(name='admin')
    role_teacher = Role.get(name='teacher') or Role(name='teacher')

    for name in admins:
        u = User.get(name=name) or User(name=name, role=role_admin)
    for name in teachers:
        u = User.get(name=name) or User(name=name, role=role_teacher)
    for name in modes:
        exec('{} = Mode.get(name=name) or Mode(name=name)'.format(name))

    room_name = 'LP1'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(16):
        IP = '172.16.1.{}'.format(101+i)
        s = Station.get(address=IP) or \
            Station(address=IP, room=room, mode=Full)

    room_name = 'LP3'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(16):
        IP = '172.16.3.{}'.format(101+i)
        s = Station.get(address=IP) or \
            Station(address=IP, room=room, mode=Full)

    room_name = 'LP4'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(11):
        IP = '172.16.4.{}'.format(101+i)
        s = Station.get(address=IP) or \
        Station(address=IP, room=room, mode=Full)

    room_name = 'LP5'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(11):
        IP = '172.16.5.{}'.format(101+i)
        s = Station.get(address=IP) or \
            Station(address=IP, room=room, mode=Full)

    room_name = 'LP6'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(16):
        IP = '172.16.6.{}'.format(101+i)
        s = Station.get(address=IP) or \
            Station(address=IP, room=room, mode=Full)

    room_name = 'MIT'
    room = Room.get(name=room_name) or Room(name=room_name)
    for i in range(11):
        IP = '172.16.7.{}'.format(101+i)
        s = Station.get(address=IP) or \
            Station(address=IP, room=room, mode=Full)

    for room in rooms:
        f = open(room.lower() + '.conf', 'a')
        f.close()

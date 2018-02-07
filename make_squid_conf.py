#!/usr/bin/env python3
# Soubor:  make_squid_conf.py
# Datum:   07.02.2018 11:18
############################################################################
from sys import argv
from web_interface.models import Room, Station, Domain
from pony.orm import db_session, select

try:
    user = argv[1]
    room = argv[2].upper()
except IndexError:
    print("Zadej <uživatele> a <místnost>\n")
    print("\t {} karel LP6\n".format(argv[0]))
    exit(1)


with db_session:
    try:
        room = Room.get(name=room)
        print('# '+room.name)
    except AttributeError:
        print("ERROR: ")
        print("\tZadal jsi neexistující <místnost>.\n")
        exit(2)

    for s in room.stations.order_by(Station.mode, Station.address):
        print('acl {}_{} src {}'.format(room.name, s.mode.name, s.address))

    print()

    for d in select(d for d in Domain
                    if d.user.name == user and not d.regexp and d.alive):
        print('acl {}_{}_{} dstdomain {}'.format(room.name,
                                                 'domain',
                                                 d.mode.name,
                                                 d.string))
    print()
    for d in select(d for d in Domain
                    if d.user.name == user and d.regexp and d.alive):
        print('acl {}_{}_{} url_regex -i {}'.format(room.name,
                                                 'regex',
                                                 d.mode.name,
                                                 d.string))

    print()
    print('http_access allow {}_Full'.format(room.name))
    print()
    print('http_access deny  {0}_On  {0}_{1}_On'.format(room.name, 'domain'))
    print('http_access allow {0}_On !{0}_{1}_On'.format(room.name, 'domain'))
    print('http_access deny  {0}_On  {0}_{1}_On'.format(room.name, 'regex'))
    print('http_access allow {0}_On !{0}_{1}_On'.format(room.name, 'regex'))
    print()
    print('http_access allow {0}_Teach  {0}_{1}_Teach'.format(room.name,
                                                              'domain'))
    print('http_access deny  {0}_Teach !{0}_{1}_Teach'.format(room.name,
                                                              'domain'))
    print('http_access allow {0}_Teach  {0}_{1}_Teach'.format(room.name,
                                                              'regex'))
    print('http_access deny  {0}_Teach !{0}_{1}_Teach'.format(room.name,
                                                              'regex'))
    print()
    print('http_access deny {}_Off'.format(room.name))

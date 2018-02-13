#!/usr/bin/env python3
# Soubor:  make_squid_conf.py
# Datum:   07.02.2018 11:18
############################################################################
from sys import argv
from web_interface.models import Room, Station, Domain
from pony.orm import db_session, select, count

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
        print('# {} {}\n'.format(room.name, user))
    except AttributeError:
        print("ERROR: ")
        print("\tZadal jsi neexistující <místnost>.\n")
        exit(2)

    # mod každého stroje
    for s in room.stations.order_by(Station.mode, Station.address):
        print('acl {}_{} src {}'.format(room.name, s.mode.name, s.address))

    print()

    # povolené a zakázané domény
    for d in select(d for d in Domain
                    if d.user.name == user and not d.regexp and d.alive):
        print('acl d_{}_{}_{} dstdomain {}'.format(user,
                                                   room.name,
                                                   d.mode.name,
                                                   d.string))
    print()
    # povolené a zakázané regulární výrazy
    for d in select(d for d in Domain
                    if d.user.name == user and d.regexp and d.alive):
        print('acl r_{}_{}_{} url_regex -i {}'.format(user,
                                                      room.name,
                                                      d.mode.name,
                                                      d.string))

    print()

    print('# Full')
    if count(s for s in Station if s.room == room and s.mode.name == 'Full'):
        print('http_access allow {}_Full'.format(room.name))
    print()

    print('# On domain')
    if count(s for s in Station if s.room == room and s.mode.name == 'On') \
            and count(d for d in Domain if d.mode.name == 'On' and
                      d.user.name == user and not d.regexp and d.alive):
        print('http_access deny  {0}_On  d_{1}_{0}_On'.format(room.name,
                                                              user))
        print('http_access allow {0}_On !d_{1}_{0}_On'.format(room.name,
                                                              user))
    print('# On regexp')
    if count(s for s in Station if s.room == room and s.mode.name == 'On') \
            and count(d for d in Domain if d.mode.name == 'On' and
                      d.user.name == user and d.regexp and d.alive):
        print('http_access deny  {0}_On  r_{1}_{0}_On'.format(room.name,
                                                              user))
        print('http_access allow {0}_On !r_{1}_{0}_On'.format(room.name,
                                                              user))
    print()

    print('# Teach domain')
    if count(s for s in Station if s.room == room and s.mode.name == 'Teach') \
            and count(d for d in Domain if d.mode.name == 'Teach' and
                      d.user.name == user and not d.regexp and d.alive):
        print('http_access allow {0}_Teach  d_{1}_{0}_Teach'.format(room.name,
                                                                    user))
        print('http_access deny  {0}_Teach !d_{1}_{0}_Teach'.format(room.name,
                                                                    user))
    print('# Teach regexp')
    if count(s for s in Station if s.room == room and s.mode.name == 'Teach') \
            and count(d for d in Domain if d.mode.name == 'Teach' and
                      d.user.name == user and d.regexp and d.alive):
        print('http_access allow {0}_Teach  r_{1}_{0}_Teach'.format(room.name,
                                                                    user))
        print('http_access deny  {0}_Teach !r_{1}_{0}_Teach'.format(room.name,
                                                                    user))
    print()

    print('# Off')
    if count(s for s in Station if s.room == room and s.mode.name == 'Off'):
        print('http_access deny {}_Off'.format(room.name))
    print()

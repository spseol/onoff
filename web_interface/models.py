from . import app

from datetime import datetime
from pony.orm import (Database,
                      PrimaryKey,
                      Optional,
                      Set,
                      Required,
                      composite_key)

db = Database("postgres",
              host="localhost",
              user=app.config['PG_USER'],
              database=app.config['PG_DB'],
              password=app.config['PG_PASSWD'])


class Loginlog(db.Entity):
    """Logging korektních a nekorektních přihlášení"""
    id = PrimaryKey(int, auto=True)
    name = Required(str)
    time = Required(datetime)
    address = Required(str)
    wrong_passwd = Optional(str, nullable=True, default=None)
    # None znamená korektní přihlášení


class Station(db.Entity):
    """V jakém režimu je klientská stanice?"""
    id = PrimaryKey(int, auto=True)
    address = Required(str, unique=True)  # IP adresa klienta
    mode = Required('Mode')
    room = Required('Room')


class Mode(db.Entity):
    """Full, On, Teach, Off"""
    id = PrimaryKey(int, auto=True)
    name = Required(str)
    stations = Set(Station, cascade_delete=True)
    ports = Set('Port', cascade_delete=True)
    domains = Set('Domain')


class Domain(db.Entity):
    """acl JMENO dstdomain"""
    id = PrimaryKey(int, auto=True)
    string = Required(str)
    mode = Required(Mode)
    user = Required('User')
    alive = Required(bool, default=True)  # aktivní?
    # admin může šahat do šablony a user má možnost si šablonu nakopírovat
    template = Required(bool, default=False)  
    regexp = Required(bool, default=False)  # acl  JMENO url_regex -i
    ipaddress = Required(bool, default=False)  # acl JMENO dst
    permit = Optional(bool)
    composite_key(string, mode, user, template, regexp, ipaddress)


class User(db.Entity):
    """Uživatelé mají role a mohou zakazovat nebo povolovat domény."""
    id = PrimaryKey(int, auto=True)
    name = Required(str, unique=True)
    role = Required('Role')
    domains = Set(Domain)
    ports = Set('Port')

    @property
    def is_authenticated(self):
        return True

    @property
    def is_active(self):
        return True

    @property
    def is_anonymous(self):
        return False

    def get_id(self):
        return self.name

    def __repr__(self):
        return '<User {}>'.format(self.name)


class Role(db.Entity):
    """admin, user, teacher"""
    id = PrimaryKey(int, auto=True)
    name = Required(str, unique=True)
    users = Set(User)


class Port(db.Entity):
    id = PrimaryKey(int, auto=True)
    number = Required(int, nullable=True)
    host = Required(str, nullable=True)
    permit = Required(bool)
    mode = Required(Mode)
    user = Required(User)
    force = Required(bool, default=0)
    alive = Required(bool, default=1)
    composite_key(number, host)


class Room(db.Entity):
    id = PrimaryKey(int, auto=True)
    name = Required(str)
    stations = Set(Station)

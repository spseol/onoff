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


class Policy(db.Entity):
    """V jakém režimu je klientská stanice?"""
    id = PrimaryKey(int, auto=True)
    host = Required(str)  # IP adresa klienta
    mode = Required('Mode')


class Mode(db.Entity):
    """Full, On, Teach, Off"""
    _table_ = 'Set'
    id = PrimaryKey(int, auto=True)
    name = Required(str)
    policyes = Set(Policy, cascade_delete=True)
    ports = Set('Port', cascade_delete=True)
    domains = Set('Domain')


class Domain(db.Entity):
    """acl JMENO dstdomain"""
    id = PrimaryKey(int, auto=True)
    name = Required(str)
    permit = Optional(bool)
    mode = Required(Mode)
    user = Required('User')
    force = Required(bool, default=0)  # pro všechny uživatele
    alive = Required(bool, default=1)  # aktivní?
    regexp = Required(bool, default=0)  # acl  JMENO url_regex -i
    ipaddress = Required(bool, default=0)  # acl JMENO dst


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

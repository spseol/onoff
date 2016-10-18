#!/bin/zsh
# Soubor:  preinit_db.zsh
# Datum:   18.10.2016 14:17
# Autor:   Marek Nožka, marek <@T> tlapicka <dot> net
# Licence: GNU/GPL 
# Úloha: 
############################################################

cd $(dirname $0)

dropdb -e onoff; 
dropuser -e onoff; 
./psql-create.user.db onoff Aen8moonoh

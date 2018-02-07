#!/bin/zsh
# File:    make_squid_conf.sh
# Date:    07.02.2018 13:25
# Author:  Marek Nožka, marek <@t> tlapicka <d.t> net
# Licence: GNU/GPL 
############################################################

cd $(dirname $0)

.venv-OnOff/bin/python3 make_squid_conf.py $@ >lp6.conf
chmod 644 lp6.conf

service squid reload

#!/bin/zsh
# File:    make_squid_conf.sh
# Date:    07.02.2018 13:25
# Author:  Marek Nožka, marek <@t> tlapicka <d.t> net
# Licence: GNU/GPL 
############################################################

cd $(dirname $0)
user=$1
lab=$(echo $2 | awk '{print tolower($0)}')

.venv-OnOff/bin/python3 make_squid_conf.py $@ >${lab}.conf
chmod 644 ${lab}.conf

sudo service squid reload

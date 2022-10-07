# LG-TV-WOL
etherwake, WOL, Wake on LAN, LG, LT TV


A working solution to wake a mediaserver from the LGTV, using a raspberry pi, or any othr linux server.

1: install etherwake and make it run without sudo
sudo apt-get install etherwake
sudo ln -s /usr/sbin/etherwake /usr/bin/etherwake
sudo setcap cap_net_raw+ep /usr/sbin/etherwake

The make the following scrpits in var/www/html/
1: index.php 2: wake-server.php and wake-server.sh

https://github.com/tue-kyndal/LG-TV-WOL/tree/main

Set up the LG TV start-page to the webpage with http://IP of the PI/index.php

NOT domain name. The LG-TV can not resolve this.

To wake up media sever just select browser app, click the link, done.

Simple and easy - all done ;O)

And yes..I have WOL apps on the phone etc, but the this is easy for the kids and wife, and they stopped nagging about it ;O)

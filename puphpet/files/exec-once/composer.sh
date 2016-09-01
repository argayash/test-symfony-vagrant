#!/usr/bin/bash

echo "Composer update"
sudo -H -u vagrant bash -c "cd /var/www/stest/"
sudo -H -u vagrant bash -c "composer update"
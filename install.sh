##############################################
#       Installation Script for FOIL-Home
#       Written by Senal Bulumulle
#
##############################################



## Install Dependencies
sudo apt install git
sudo apt install apache2
sudo apt install php
sudo apt install chromium-browser



## Unlock chmod /var/www/html/
sudo chmod 777 /var/www/html/

## Unlock /var/www/html/index.html
sudo chmod 777 /var/www/html/index.html

## Change directory to /var/www/html
cd /var/www/html

## Remove the index.html
rm index.html

## Clone the FOIL-Home Repository 
git clone https://github.com/foil-os/FOIL-Home

## Prompt the user to refer back to the README.md file for further instructions
## Fix issue

## Inform the user that system is opening visudo
## Fix issue

## Inform the user to refer to the README.md file for further instructions
## Fix issue

sudo visudo



## Inform the user that system is opening /etc/apache2/sites-available/000-default.conf
## Fix Issue

## Change directory to /etc/apache2/sites-available
cd /etc/apache2/sites-available/

## Open the 000-default.conf file
nano 000-default.conf

exit;
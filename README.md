# FOIL-Home
<b>FOÏL Home is a Smart Home Automation System that not only just control Lights, Air Conditioning, and most other things in the house that most smart homes use, but it controls other unique things in the house based on robotics, such as turning on a faucet, flushing toilets, automatically opening the front door, and much more.</b>



## Installation

1.  <b> Use the APT package manager to install git using sudo. </b>
```bash
sudo apt install git 
```
2. <b>Use the APT package manager to install Apache </b>
```bash
sudo apt install apache2
```
3. <b> Use the APT package manager to install PHP </b>
```bash
sudo apt install php
```
4. <b> Use the APT package manager to install chromium-browser </b>
```bash
sudo apt install chromium-browser
```



## Configuration
1. <b> Use chmod 777 command to disable Read-Only mode on the folder using sudo </b>
``` bash
## This will disable Read-Only Mode
sudo chmod 777 /var/www/html/
```
2. <b> Then use the chmod 777 command to disable Read-Only mode on index.html using sudo </b>
```bash
sudo chmod 777 /var/www/html/index.html
```
3. <b> Then use the "cd" command to change directory to the "/var/www/html/" folder </b>

```bash
cd /var/www/html
```

4. <b> Then use git to install FOIL-Home on the "/var/www/html/" folder.  </b>

```bash
git clone https://github.com/foil-os/FOIL-Home
```

5. <b> Then use visudo to configure Shut-Down, and Restart right from the web browser components.</b>
```bash
## Under the "includedir /etc/sudoers.d" section, type these commands :
www-data ALL=NOPASSWD:/sbin/shutdown
www-data ALL=NOPASSWD:/sbin/shutdown-h
www-data ALL=NOPASSWD:/sbin/sleep
www-data ALL=NOPASSWD:/sbin/halt
```
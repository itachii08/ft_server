#Install PHP

apt-get install lsb-release apt-transport-https ca-certificates wget -y
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
apt-get update
apt -y install php7.4-fpm  php7.4-cli php7.4-common php7.4-gd php7.4-mbstring php7.4-mysql php7.4-xml php7.4-xmlr php7.4-imagick php7.4-zip 
service php7.4-fpm start

#Install and Configure phpMyAdmin
cd /var/www/html/
mkdir phpmyadmin
cd phpmyadmin/
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-english.zip 
apt-get install zip unzip -y
unzip phpMyAdmin-4.9.7-english.zip
cd phpMyAdmin-4.9.7-english/
mv * /var/www/html/phpmyadmin
cd ..
rm phpMyAdmin-4.9.7-english.zip
rm -rf phpMyAdmin-4.9.7-english/
mkdir tmp
chmod 777 tmp/
mv config.sample.inc.php config.inc.php

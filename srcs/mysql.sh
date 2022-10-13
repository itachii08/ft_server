#install Mysql
apt-get install wget -y
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
apt-get install ./mysql-apt-config_0.8.13-1_all.deb -y
apt-get update
apt-get upgrade -y
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start 

#create DB & user
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'zoizmer'@'localhost' IDENTIFIED BY 'zoizmer';";
mysql --password=zoizmer --user=zoizmer -e "CREATE DATABASE phpmyadmin;";
mysql --password=zoizmer --user=zoizmer -e "CREATE DATABASE wordpress;";
mysql --password=zoizmer --user=zoizmer -e "FLUSH PRIVILEGES;";

#import DB
mysql --password=zoizmer --user=zoizmer wordpress < wordpress.sql
mysql --password=zoizmer --user=zoizmer phpmyadmin < phpmyadmin.sql


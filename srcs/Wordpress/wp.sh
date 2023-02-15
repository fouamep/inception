#!/bin/bash

mkdir /var/www/
mkdir /var/www/html
cd /var/www/html
rm -rf *
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar 
chmod +x wp-cli.phar 
mv wp-cli.phar /usr/local/bin/wp
wp core download --allow-root
mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php
mv /wp-config.php /var/www/html/wp-config.php
sed -i -r "s/db1/$DB_NAME/1"   wp-config.php
sed -i -r "s/user/$DB_USER/1"  wp-config.php
sed -i -r "s/pwd/$DB_PASS/1"    wp-config.php
wp core install --url=localhost/ --title=simple_title --admin_user=fouad --admin_password=fouad123 --admin_email=fouadbouanane6@gmail.com --skip-email --allow-root
wp user create user fouadbouanane6@gmail.com --role=author --user_pass=fbouanan --allow-root
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf
/usr/sbin/php-fpm7.3 -F -R
FROM debian:buster
RUN mkdir -p var/www/html
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y php7.3-fpm php7.3-mbstring php7.3-mysql php7.3-phar curl && mkdir -p /run/php
# RUN apt-get -y install curl

COPY ./wp-config.php /
COPY ./wp.sh /
RUN chmod +x /wp.sh
CMD ["sh", "/wp.sh"]
# RUN wget https://wordpress.org/latest.tar.gz && tar xzvf latest.tar.gz && rm latest.tar.gz
# RUN mv wordpress /var/www/html/
# RUN chown -R www-data:www-data /var/www/html/wordpress
# COPY ./wp-config.php .
# # COPY ./my_file/phpinfo.php .
# COPY ./php-fpm.conf /etc/php/7.3/fpm/
# COPY ./www.conf /etc/php/7.3/fpm/pool.d/
# RUN mv ./wordpress/* ./
# RUN chmod +x ./*
# RUN rm -rf wordpress
# # COPY .my_file/index.php /wordpress
# RUN service php7.3-fpm start && service php7.3-fpm stop
# CMD ["/usr/sbin/php-fpm7.3", "-F","-R"]
# CMD sleep 2000

FROM debian:buster
RUN mkdir -p var/www/html
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y php7.3-fpm php7.3-mbstring php7.3-mysql php7.3-phar curl && mkdir -p /run/php
COPY ./wp-config.php /
COPY ./wp.sh /
RUN chmod +x /wp.sh
CMD ["sh", "/wp.sh"]
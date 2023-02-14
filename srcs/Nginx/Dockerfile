FROM debian:buster
RUN apt update
RUN apt -y install nginx && apt -y install openssl && service nginx start
#RUN service nginx stop
#RUN openssl req -x509 -newkey rsa:2048 -keyout /etc/nginx/cert.key -out /etc/nginx/cert.crt -nodes -days 365 -subj "/CN=fbouanan.com"
# COPY ./conf/nginx.conf /etc/nginx
RUN mkdir -p /etc/nginx/ssl
WORKDIR /etc/nginx/ssl
RUN openssl req -x509 -newkey rsa:2048 -keyout /etc/nginx/ssl/cert.key -out /etc/nginx/ssl/cert.crt -nodes -days 365 -subj "/CN=fbouanan.com"
COPY ./conf/nginx.conf /etc/nginx/nginx.conf
# RUN chown -R www-data:www-data /var/www/html
# RUN service nginx stop
# EXPOSE 443
CMD ["nginx", "-g", "daemon off;"]
# CMD sleep 2000
 
FROM debian:buster
RUN apt update
RUN apt -y install nginx && apt -y install openssl && service nginx start
RUN mkdir -p /etc/nginx/ssl
WORKDIR /etc/nginx/ssl
RUN openssl req -x509 -newkey rsa:2048 -keyout /etc/nginx/ssl/cert.key -out /etc/nginx/ssl/cert.crt -nodes -days 365 -subj "/CN=fbouanan.com"
COPY ./conf/nginx.conf /etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]

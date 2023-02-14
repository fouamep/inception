FROM debian:buster
RUN apt update &&apt -y install mariadb-server && service mysql start
COPY ./50-server.cnf /etc/mysql/mariadb.conf.d
COPY ./db.sh /
RUN chmod +x /db.sh
CMD [ "/db.sh"]
# CMD sleep 500000
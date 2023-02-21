FROM debian:buster
RUN apt update &&apt -y install mariadb-server && service mysql start
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d
COPY ./tools/db.sh /
RUN chmod +x /db.sh
CMD [ "/db.sh"]

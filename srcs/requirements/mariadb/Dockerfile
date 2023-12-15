FROM debian:buster

# These ARG value are dammy and will be replaced by .env
ARG ARG_PASS_SQL=test
ARG ARG_PASS_ROOT=test
ARG ARG_USER=test

RUN apt-get update && \
	apt-get install -y mariadb-server && \
    mv /etc/mysql/mariadb.conf.d/50-server.cnf /var/lib/mysql/50-server_original.cnf;

COPY ./tools/myini.sql /etc/mysql/myini.sql
COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN apt-get update && apt-get install -y sed procps; \
    service mysql start && \
	sed -e "s/MYPASSWORD/$ARG_PASS_SQL/" -e "s/ROOTPASSWORD/$ARG_PASS_ROOT/" -e "s/USERNAME/$ARG_USER/g"  /etc/mysql/myini.sql > /etc/mysql/myini_new.sql && \
	mysql < /etc/mysql/myini_new.sql && rm /etc/mysql/myini_new.sql;

EXPOSE 3306

CMD ["mysqld"]
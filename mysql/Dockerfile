# Debian 9.13

FROM mysql:5.6

ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV TZ JST-9

COPY ./my.cnf /etc/mysql/conf.d/my.cnf

COPY ./initdb.d /docker-entrypoint-initdb.d

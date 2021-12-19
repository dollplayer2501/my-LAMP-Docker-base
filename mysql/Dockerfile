# Debian 9.13

FROM mysql:5.6

ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV TZ JST-9

ENV DEBIAN_FRONTEND=noninteractive

# EXPOSE 3306

COPY ./my.cnf /etc/mysql/conf.d/my.cnf

CMD ["mysqld"]

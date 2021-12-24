# PHP Version 5.3.10-1ubuntu3.48

FROM ubuntu:12.04

RUN sed -i -e 's/archive.ubuntu.com\|security.ubuntu.com/old-releases.ubuntu.com/g' /etc/apt/sources.list

RUN apt-get -qq update \
      && apt-get install -y -qq --no-install-recommends build-essential \
      imagemagick libmagickcore-dev libmagickwand-dev libssh2-1-dev \
      apache2 \
      php5 \
      php5-dev \
      libapache2-mod-php5 \
      php5-gd \
      php5-mcrypt \
      php5-mysql \
      php5-curl \
      php-pear \
      && rm -rf /var/lib/apt/lists/*

RUN pecl install imagick-2.2.2
RUN pecl install memcache-2.2.5
RUN pecl install ssh2-0.11.1

COPY ./conf.d/php.apache.ini /etc/php5/apache2/php.ini
COPY ./conf.d/php.cli.ini /etc/php5/cli/php.ini
COPY ./conf.d/imagick.ini /etc/php5/conf.d/imagick.ini
COPY ./conf.d/memcache.ini /etc/php5/conf.d/memcache.ini
COPY ./conf.d/ssh2.ini /etc/php5/conf.d/ssh2.ini

COPY ./run /usr/local/bin/run
RUN chmod +x /usr/local/bin/run
RUN a2enmod rewrite

RUN touch /var/log/php_errors.log
RUN chmod 0666 /var/log/php_errors.log

EXPOSE 80
CMD ["/usr/local/bin/run"]

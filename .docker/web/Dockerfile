FROM public.ecr.aws/dwchiang/nginx-php-fpm:8.2.12-fpm-bookworm-nginx-1.25.2

COPY php.ini /usr/local/etc/php/
COPY docker.conf /usr/local/etc/php-fpm.d/docker.conf
COPY .bashrc /root/

RUN apt-get update -y
RUN apt-get -y install vim

# Install logrotate
RUN apt-get install logrotate -y
COPY ./script.sh /script.sh
RUN chmod +x /script.sh

ENTRYPOINT ["/script.sh"]


RUN apt-get update \
  && apt-get install -y build-essential zlib1g-dev default-mysql-client curl gnupg procps vim git unzip libzip-dev libpq-dev \
  && docker-php-ext-install zip pdo_mysql pdo_pgsql pgsql

RUN apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

# pcov
RUN pecl install pcov && docker-php-ext-enable pcov

# Xdebug
RUN pecl install xdebug \
&& docker-php-ext-enable xdebug \
&& echo ";zend_extension=xdebug" > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /root
RUN git clone https://github.com/seebi/dircolors-solarized

FROM docker.io/turnkeylinux/lamp:latest

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get -y -o Dpkg::Options::="--force-confnew" install \
    php-intl \
    php-mbstring \
    acl \
&& rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite \
 && composer self-update

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY composer.* .

RUN composer --no-interaction install

COPY config/inithooks.conf /etc/inithooks.conf

COPY config/apache2.conf /etc/apache2/sites-enabled/000-default.conf

COPY config/*app-settings /usr/lib/inithooks/firstboot.d

COPY . .

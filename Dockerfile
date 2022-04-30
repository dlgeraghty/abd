FROM php:7.2-apache
#install mongo extension for php
RUN pecl install mongodb 
#enable mongo extension for php
RUN docker-php-ext-enable mongodb
#install composer 
RUN apt update
RUN apt install unzip
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
#install mongodb high-level library
RUN cd /var/www/html
RUN composer require mongodb/mongodb
#for reference: mongodb extension is not enough, as it only provides very low level functions that may not be adecuate for normal php programming, so, we need to install a wrapper on top of it, that is, the mongodb library installed via composer

FROM php:7.2-apache

COPY . /var/www/html/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update
RUN apt-get install -y git
RUN apt install -y ffmpeg
RUN a2enmod headers
RUN sed -ri -e 's/^([ \t]*)(<\/VirtualHost>)/\1\tHeader set Access-Control-Allow-Origin "sih.mailid.tk"\n\1\2/g' /etc/apache2/sites-available/*.conf
RUN apt-get install -y libssl-dev pkg-config
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

RUN composer install --no-interaction

EXPOSE 80

ENTRYPOINT ["php", "-S", "0.0.0.0:80"]

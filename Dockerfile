FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=2.2.4 && rm composer-setup.php \
    && mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite
RUN sed -ri -e 's!/var/www/html!/var/www/html/mvc!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/mvc!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN sed -i '/<Directory \/var\/www\/html\/mvc>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf


EXPOSE 80
CMD apachectl -D FOREGROUND
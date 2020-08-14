FROM php:7.1-cli

ENV APP_DIR /app
ENV APPLICATION_ENV development

WORKDIR $APP_DIR
VOLUME $APP_DIR

COPY . /app

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');    \
    \$sig = file_get_contents('https://composer.github.io/installer.sig');      \
    if (trim(\$sig) === hash_file('SHA384', 'composer-setup.php')) exit(0);     \
    echo 'ERROR: Invalid installer signature' . PHP_EOL;                        \
    unlink('composer-setup.php');                                               \
    exit(1);"                                                                   \
 && php composer-setup.php -- --filename=composer --install-dir=/usr/local/bin  \
 && rm composer-setup.php

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git \ 
    libzip-dev \
    zip \
  	&& docker-php-ext-configure zip --with-libzip \
  	&& docker-php-ext-install zip

RUN composer install --no-scripts --no-autoloader

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/app"]
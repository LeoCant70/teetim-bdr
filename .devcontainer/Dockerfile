FROM php:8.3-apache

RUN apt-get update && apt-get install -y --no-install-recommends libicu-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install mysqli pdo_mysql intl \
    && a2enmod rewrite

# Affichage des erreurs PHP pour l'apprentissage
RUN { echo "display_errors=On"; echo "error_reporting=E_ALL"; } > /usr/local/etc/php/conf.d/dev.ini

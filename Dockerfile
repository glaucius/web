FROM php:8.0.1-apache

RUN apt-get update && apt-get -y install git
WORKDIR /var/www/html

RUN rm -rf * \
    &&  git clone https://github.com/glaucius/web.git /var/www/html

RUN chmod a+w /var/www/html/


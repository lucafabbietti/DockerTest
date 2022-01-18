FROM ubuntu:20.04
ENV TZ=Europe/Rome
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update && apt-get install -y dialog apt-utils apache2 php libapache2-mod-php
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
WORKDIR /var/www/html
COPY index.php index.php
EXPOSE 80
RUN apachectl start


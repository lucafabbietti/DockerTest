FROM ubuntu:20.04
RUN apt-get update && apt-get install -y dialog apt-utils apache2 php libapache2-mod-php
EXPOSE 80


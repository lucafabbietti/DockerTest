FROM mysql:8.0.28
COPY /src/init.sql /tmp/init.sql
RUN chown -RXW mysql:root /var/lib/mysql/
RUN /bin/bash -c "/usr/bin/mysqld_safe --skip-grant-tables &" && \
  sleep 5 && \
  mysql -u root -e "CREATE DATABASE mydb" && \
  mysql -u root mydb < /tmp/init.sql
#RUN apt update && apt upgrade
EXPOSE 3306
CMD ["mysqld_safe"]
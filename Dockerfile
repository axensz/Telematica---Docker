FROM ubuntu
RUN apt update
RUN apt install python3.10 -y
RUN apt install python3-pip -y
RUN pip3.10 install flask
WORKDIR /myapp/
COPY app.py /myapp/app.py
COPY templates/index.php /myapp/index.php
COPY templates/login.php /myapp/index.php
COPY templates/registro.php /myapp/index.php
EXPOSE 80
CMD python3.10 /myapp/app.py
FROM php:7.4-apache 
COPY templates/ /var/www/html/
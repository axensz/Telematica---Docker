                                                                   FROM ubuntu
ARG DEBIAN_FRONTEND=noninteractive
RUN apt update
RUN apt install python3.10 -y
RUN apt install python3-pip -y
RUN pip3.10 install flask
RUN apt install apache2 -y
RUN apt install php -y
RUN apt install php libapache2-mod-php -y
RUN service apache2 restart
COPY templates/ /var/www/html/
COPY app.py /home/myapp/
COPY templates/index.php /home/myapp/
COPY templates/login.php /home/myapp/
COPY templates/registro.php /home/myapp/
RUN chmod 777 /var/www/html/
WORKDIR /home/myapp/
EXPOSE 80
CMD python3.10 /home/myapp/app.py
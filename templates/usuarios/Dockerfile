FROM ubuntu
RUN apt update
RUN apt install python3.10 -y
RUN apt install python3-pip -y
RUN pip3.10 install flask
WORKDIR /myapp/
COPY app.py /myapp2/app2.py
COPY templates/index.php /myapp2/index.php
COPY templates/login.php /myapp2/login.php
COPY templates/registro.php /myapp2/registro.php
EXPOSE 80
CMD python3.10 /myapp2/app2.py
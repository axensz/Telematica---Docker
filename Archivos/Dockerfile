FROM ubuntu
RUN apt update
RUN apt install python3.10 -y
RUN apt install python3-pip -y
RUN pip3.10 install flask
COPY app.py /myapp/app.py
COPY index.php /myapp/index.php
COPY login.php /myapp/index.php
COPY registro.php /myapp/index.php
WORKDIR /myapp/
EXPOSE 80
CMD python3.10 /myapp/app.py
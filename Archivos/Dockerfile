FROM ubuntu
RUN apt update
RUN apt install python3.10 -y
RUN apt install python3-pip -y
RUN pip3.10 install flask
COPY app.py /myapp/app.py
WORKDIR /myapp/
EXPOSE 80
CMD python3.10 /myapp/app.py
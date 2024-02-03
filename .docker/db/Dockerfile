FROM public.ecr.aws/ubuntu/mysql:latest

RUN apt-get update -y
RUN apt-get install  -y systemctl
RUN apt-get -y install vim
RUN apt-get install -y sudo
RUN apt-get install -y mysql-server
RUN systemctl enable mysql

# Set the root password
ENV MYSQL_ROOT_PASSWORD 123123

# Copy the SQL file into the docker-entrypoint-initdb.d directory
COPY init.sql /docker-entrypoint-initdb.d/

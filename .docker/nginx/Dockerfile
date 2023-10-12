FROM nginx

RUN apt-get update -y
RUN apt-get -y install vim

# Install logrotate
RUN apt-get install logrotate -y
COPY ./script.sh /script.sh
RUN chmod +x /script.sh

ENTRYPOINT ["/script.sh"]



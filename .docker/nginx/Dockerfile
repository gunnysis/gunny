FROM nginx

RUN apt-get update -y
RUN apt-get -y install vim

# Install logrotate
RUN apt-get install logrotate -y
COPY ./script.sh /script.sh
RUN chmod +x /script.sh

ENTRYPOINT ["/script.sh"]

# Vi(Vim)의 탭 크기를 4로 변경하는 설정을 추가합니다.
RUN echo "set tabstop=4" >> /etc/vim/vimrc.local
RUN echo "set shiftwidth=4" >> /etc/vim/vimrc.local
RUN echo "set expandtab" >> /etc/vim/vimrc.local
RUN source /etc/vim/vimrc.local


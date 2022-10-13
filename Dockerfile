FROM debian:buster
COPY srcs /
RUN bash scr.sh
CMD bash services.sh
EXPOSE 80 443

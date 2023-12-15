FROM debian:buster

# These ARG are default dammy value and will be replaced by .env
ARG ARG_USER=test
ARG ARG_DOMAIN=test

# procps is not necessary but useful if you use ps command
# Use www-data user and group to access mounted volume directory
RUN apt-get update && \
    apt-get install -y nginx openssl procps && \
    rm -rf /var/lib/apt/lists/*; \
    chown -R www-data:www-data /var/www/html; \
    openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -config /etc/ssl/openssl.cnf -out /etc/ssl/certs/nginx.crt -subj "/C=NL/ST=Amsterdam/L=Amsterdam/CN=$ARG_DOMAIN";

# Setting for nginx
COPY ./tools/default.conf /etc/nginx/conf.d/

RUN sed -i "s/DOMAINNAME/$ARG_DOMAIN/" /etc/nginx/conf.d/default.conf;

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]

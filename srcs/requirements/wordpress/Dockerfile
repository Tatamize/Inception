FROM debian:buster

# These ARG are default dammy value and will be replaced by .env
ARG ARG_PASS_SQL=test
ARG ARG_USER=test
ARG ARG_DB=test

WORKDIR /var/www/html/

# Add Sury's repository for PHP 7.4
RUN apt-get update && \
    apt-get install -y --no-install-recommends curl wget gnupg2 ca-certificates lsb-release apt-transport-https && \
    wget https://packages.sury.org/php/apt.gpg && \
    apt-key add apt.gpg &&\
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php7.list

# procps and sendmail is not necessary in this moment (procps for ps, sendmail to erase warning) 
RUN apt-get update && \
    apt-get install -y php7.4 php7.4-fpm php7.4-mysql mariadb-client procps sendmail && \
    rm -rf /var/lib/apt/lists/*

# Create directory for PID file
# Change ownership of the /var/www/html directory
RUN mkdir -p /run/php;

COPY ./tools/php-fpm.conf /etc/php/7.4/fpm/php-fpm.conf
COPY ./tools/www.conf /etc/php/7.4/fpm/pool.d/
COPY ./tools/wp_setup.sh /var/www/wp_setup.sh
COPY ./tools/wp-config.php /var/www/html/wp-config.php
COPY ./tools/404.html /var/www/html/404.html

# download wordpress, set wp-config 
RUN apt-get update  && \
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar &&\
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp && \
    chown -R www-data:www-data /var/www/html && \
    chmod +x /var/www/wp_setup.sh && \
    wp cli update && \
    wp core download --allow-root &&\
    sed -i -e "s/ARG_DB/$ARG_DB/" -e "s/ARG_USER/$ARG_USER/" -e "s/ARG_PASS_SQL/$ARG_PASS_SQL/" /var/www/html/wp-config.php;

EXPOSE 9000

ENTRYPOINT "/var/www/wp_setup.sh"


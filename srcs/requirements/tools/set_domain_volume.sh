#!/bin/bash

source ./srcs/.env;

if ! grep "127.0.0.1 ${ARG_DOMAIN}" /etc/hosts; then \
    echo "Now adding new domain to the hosts"; \
	sudo chmod 777 /etc/hosts; \
	echo "127.0.0.1 ${ARG_DOMAIN}" >>  /etc/hosts; \
	sudo chmod 644 /etc/hosts;
fi

mkdir -p ${WP_VOLUME};
chmod 644 ${WP_VOLUME};
mkdir -p ${SQL_VOLUME};
chmod 644 ${SQL_VOLUME};
#!/bin/bash

source ./srcs/.env;

docker system prune -af;
docker volume rm $(docker volume ls -q);
docker volume prune -f;

if [ -d ${WP_VOLUME} ]; then
    echo "removing ${WP_VOLUME}";
    rm -r ${WP_VOLUME}
fi
if [ -d ${SQL_VOLUME} ]; then
    echo "removing ${SQL_VOLUME}";
    rm -r ${SQL_VOLUME};
fi

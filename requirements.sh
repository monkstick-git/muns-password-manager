#!/bin/bash

docker build . -t local/php:apache2
# install composer dependencies into ./app/vendor
docker run --rm --interactive --tty --volume $PWD/app:/app composer install
docker run --rm --interactive --tty --volume $PWD/app:/app composer update

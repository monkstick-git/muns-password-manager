#!/bin/bash

docker build . -t local/php:apache2
docker run --rm --interactive --tty --volume $PWD:/app composer install
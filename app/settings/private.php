<?php

# Ideally, you should provide all sensitive information via environment variables.
# This is the most secure way to handle sensitive information.

# get the password
$db_host = ge("DB_HOST");
$db_name = ge("DB_NAME");
$db_user = ge("DB_USER");
$db_pass = ge("DB_PASSWORD");
$db_port = ge("DB_PORT");
<?php

# Set Error Reporting
error_reporting(E_ERROR | E_WARNING | E_PARSE);

# Create a global config array
$config = array();

# Public settings - Site name, URL, etc. Things that are not sensitive.
include_once('public.php');

# Private settings - Database, Passwords, keys, etc. Things that are sensitive.
include_once('private.php');
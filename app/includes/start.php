<?php

define("ROOT", __DIR__ . "/../");

# App Misc Functions
include("./includes/functions.php");

# App Settings
if (is_readable("./settings/config.php")) {
    include("./settings/config.php");
} else {
    die("Please create config file in settings/config.php");
}


# Vendor Autoload
include("./vendor/autoload.php");

# App Autoload
include("./includes/autoload.php");

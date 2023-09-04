<?php

# Get Environment Variables
function ge($v)
{
    $var = getenv($v);

    if ($var === false) {
        die("Please set the environment variable $v");
    } else {
        return $var;
    }
}
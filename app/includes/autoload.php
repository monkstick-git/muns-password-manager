<?php

foreach(glob(ROOT . "/includes/classes/*.php") as $class) {
    include($class);
}
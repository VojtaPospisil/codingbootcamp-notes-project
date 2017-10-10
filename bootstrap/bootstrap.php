<?php

//define the constant for directories
define('SYSTEM_DIR', __DIR__ . '/..'); //system directory
define('APP_DIR',SYSTEM_DIR . '/app'); //app directory
define('ROUTES_DIR',SYSTEM_DIR . '/routes'); //routes definitions directory
define('PUBLIC_DIR',SYSTEM_DIR . '/public'); //public directory
define('VENDOR_DIR',SYSTEM_DIR . '/vendor'); //vendor directory

//require_once all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php';
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';









<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'rentall');
define('DB_USER', 'root');
define('DB_PASS', '');


$bd_dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
$bd_user = DB_USER;
$bd_pass = DB_PASS;

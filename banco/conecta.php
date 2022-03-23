<?php 

    require_once(__DIR__ . '/config.php');

    $bd_dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME ;
    $bd_user = DB_USER;
    $bd_pass = DB_PASS;

    $bd = new PDO($bd_dsn, $bd_user, $bd_pass);
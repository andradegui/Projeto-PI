<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('../banco/conecta.php');
require_once('../crud/classes/Usuario.class.php');

$usuario = new Usuario($bd, $_POST);
$usuario->cadastro();

echo '<pre>';
var_dump($usuario);
die();
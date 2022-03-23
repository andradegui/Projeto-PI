<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../banco/conecta.php');
require_once('../crud/classes/Produto.php');

$produto = new Produto($bd, $_POST);
$produto->cadastrar();

var_dump($produto);
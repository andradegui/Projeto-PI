<?php

require_once('../Classes/Usuario.php');
require_once('../banco/conecta.php');

$user = new Usuario($bd, $_POST);
$user->cadastro();

echo "<pre>";
var_dump($user);

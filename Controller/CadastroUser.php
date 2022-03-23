<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once('sessao/controle.php');
require_once('../banco/conecta.php');

$nome = $_POST['nome'] ?? false;
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

if(!($senha == $confirma)){
    echo " As senhas não confere";
    die();
}

$senha = password_hash($senha, PASSWORD_DEFAULT);


if ($nome && $sobrenome && $email && $senha){

    $stmt = $bd->prepare('INSERT INTO login_user (nome, sobrenome, email, senha ) VALUES (:nome, :sobrenome, :email, :senha )');

    if ( $stmt->execute([':nome' => $nome,
                        ':sobrenome' => $sobrenome,  
                        ':email' => $email,
                        ':senha' => $senha]) 
    
        ) {

            header('Location: ../telas/formlogin.php');       

    } else { 
        echo '<pre>';
        var_dump($stmt->errorInfo());
            echo "Erro ao tentar gravar!";
    }
}   else {
    echo 'Preencha todos os campos';
}



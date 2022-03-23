<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();
    require_once('../banco/conecta.php');

    $password = $_POST['password'];
    $email = $_POST['email'];

    //preparamos a consulta no banco buscando pelo e-mail passado pelo usuário
    $stmt = $bd->prepare('SELECT id, nome, senha FROM login_user WHERE email = :email');
    
    //executamos a consulta no banco
    $stmt->execute([':email' => $email]);

    //recuperamos o registro retornado na consulta
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    //Se retornar algo, ou seja, há um user com o e-mail fornecido
    if($registro){

        //Verifica se a senha passada bate com o hash da senha gravado no banco
        if( password_verify( $password, $registro['senha']) ){

             $_SESSION['nome'] = $registro['nome'];
             $_SESSION['id'] = $registro['id'];

            header('Location:../telas/index.php');

        }   else{
                session_destroy();           
        echo "Credenciais inválidas <br><br><a href='../telas/formlogin.php'>Tente novamente</a>";
                }

    }   else{
            session_destroy();
        echo "Credenciais inválidas <br><br><a href='../telas/formlogin.php'>Tente novamente</a>";
    }

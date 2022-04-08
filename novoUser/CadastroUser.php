<?php

// require_once('sessao/controle.php');
require_once('../banco/conecta.php');
require_once('../Classes/Usuario.class.php');

class CadastroUser
{
    public function __construct($bd)
    {
        $user = new Usuario($bd);

        if (!$user->saoIguais($_POST['senha'], $_POST['confirma'])) {
            echo "A senha e sua confirmação não conferem";
            exit();
        }

        $saida = $user->cadastrar($_POST);
        if ($saida === true) {
            header('Location: ../telas/formlogin.php');
        } else {
            switch ($saida) {
                case 1:
                    echo $saida[1];
                    break;
                case 2:
                    echo $saida[2];
                    break;
                case 3:
                    echo $saida[3];
                    break;
                default:
                    echo "Erro desconhecido";
            }
        };
    }
}

new CadastroUser($bd);

// $nome = $_POST['nome'] ?? false;
// $sobrenome = $_POST['sobrenome'];
// $email = $_POST['email'];
// $senha = $_POST['senha'];
// $confirma = $_POST['confirma'];



// if (!($senha == $confirma)) {
//     echo " As senhas não confere";
//     die();
// }

// $senha = password_hash($senha, PASSWORD_DEFAULT);


// if ($nome && $sobrenome && $email && $senha) {

//     $stmt = $bd->prepare('INSERT INTO login_user (nome, sobrenome, email, senha ) VALUES (:nome, :sobrenome, :email, :senha )');

//     if ($stmt->execute([
//         ':nome' => $nome,
//         ':sobrenome' => $sobrenome,
//         ':email' => $email,
//         ':senha' => $senha
//     ])) {

//         header('Location: ../telas/formlogin.php');
//     } else {
//         echo '<pre>';
//         var_dump($stmt->errorInfo());
//         echo "Erro ao tentar gravar!";
//     }
// } else {
//     echo 'Preencha todos os campos';
// }

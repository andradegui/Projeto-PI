<?php 

require_once('../banco/conecta.php');
require_once('../classes/Usuario.class.php');


$nome = $_POST['nome'] ?? false;
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

class CadastroUser {

    public function __construct($bd)
    {
        $user = new Usuario($bd);

        if ( ! $user->saoIguais($_POST['senha'], $_POST['confirma'])){
            echo "A senha de confirmação não confere";
            exit();
        }

        $saida = $user->cadastrar($_POST);

        if ($saida === true){

            header('Location:../telas/formlogin.php');

        } else{

            switch ($saida){

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
        }

       
        //$user->cadastrar($_POST);
    }

}

new CadastroUser($bd);




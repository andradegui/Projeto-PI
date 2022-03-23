<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Usuario
{
    public $bd;
    public $nome;
    public $sobrenome;
    public $email;
    public $senha;

    function __construct($bd, $post)
    {
        $this->bd = $bd;
        $this->nome = $post['nome'];
        $this->sobrenome = $post['sobrenome'];
        $this->email = $post['email'];
        $this->senha = $post['senha'];
    }

    public function cadastro(){            

        if($this->bd->query("INSERT INTO login_user (nome, sobrenome, senha, email)
        VALUES ('$this->nome', '$this->sobrenome', '$this->senha', '$this->email')")){

            echo "Sucesso no cadastro";            
            return true;            
        }         
        else{
          echo "Erro ao tentar gravar!";
        }

    }

    public function apagar(){
        
        
    }

    public function editar(){
        
        
    }

    public function listar(){
        
        
    }
}

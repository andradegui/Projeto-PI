<?php

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

  function cadastro()
  {
    // $this->senha = password_hash($this->senha, PASSWORD_DEFAULT);

    if ($this->bd->query(
      "INSERT INTO login_user 
      (nome, sobrenome, email, senha) 
      VALUES 
      ('$this->nome', '$this->sobrenome', '$this->email', '$this->senha')"
    )) {
      echo "Cadastrouuuuuuu";
      return true;
    } else {
      echo "Falhouuuuuuuu";
      return false;
    };
  }
}

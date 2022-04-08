<?php

class Usuario
{
  public function __construct(BD $bd)
  {
    $this->bd = $bd;
  }

  public function cadastrar(array $cadastro)
  {
    $senha = password_hash($cadastro['senha'], PASSWORD_DEFAULT);

    if ($cadastro['nome'] && $cadastro['sobrenome'] && $cadastro['email'] && $senha) {

      if ($this->jaCadastrado($cadastro['email'])) {
        return [3, "Já cadastrado"];
      }

      $stmt = $this->bd->prepare('INSERT INTO login_user (nome, sobrenome, email, senha ) VALUES (:nome, :sobrenome, :email, :senha )');

      if ($stmt->execute([
        ':nome' => $cadastro['nome'],
        ':sobrenome' => $cadastro['sobrenome'],
        ':email' => $cadastro['$email'],
        ':senha' => $senha
      ])) {
        return true;
      } else {
        return [1 => "Erro ao tentar gravar no banco de dados!"];
      }
    } else {
      return [2 => 'Preencha todos os campos'];
    }
  }

  public function jaCadastrado(string $email): bool
  {
    /* Verifica no banco se já esta cadastrado*/
    return false;
  }

  public function saoIguais(string $senha, string $confirma)
  {
    if ($senha != $confirma) {
      return false;
    }
    return true;
  }
}

<?php
include '../telas/header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

  <body>
      <main class="container">
        <link rel="stylesheet" href="../css/novoUser.css">

        <h2> Novo Usuário </h2>

          <form method="post" action="../novoUser/CadastroUser.php">

            <div class="input-field">
              <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
              <div class="underline"> </div>
            </div>

            <div class="input-field">
              <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">
              <div class="underline"> </div>
            </div>

            <div class="input-field">
              <input type="text" name="email" id="email" placeholder="seuemail@exemplo.com">
              <div class="underline"> </div>
            </div>

            <div class="input-field">
              <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
              <div class="underline"> </div>
            </div>

            <div class="input-field">
              <input type="password" name="confirma" id="confirma" placeholder="Confirme sua senha">
              <div class="underline"> </div>
            </div>

            <input type="submit" value="Cadastrar">

            <a class="text-center mt-3" style ="text-decoration:none; color: #808080" href="../telas/index.php">
              <span> Continue como visitante </span>
            </a>
          </form>
      </main>
  </body>

</html>
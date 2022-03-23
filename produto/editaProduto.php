<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once('sessao/controle.php');
require_once('../banco/conecta.php');




$titulo = $_POST['titulo'] ?? false;
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];



if ($titulo && $categoria && $modelo && $marca && $descricao) {

    if (isset($_FILES['upload'])) {

        $tipo = mime_content_type($_FILES['upload']['tmp_name']);

        switch ($tipo) {
              case 'image/jpeg':
                    $ext = '.jpg';
                    break;
  
              case 'image/png':
                    $ext = '.png';
                    break;
  
              default:
                    echo "Tipo de arquivo não aceito!";
                    die();
        }

        $arquivo = 'imagem-produto/' . rand(1, 9999999999) . 'user.jpg';

        //para um local definitivo. move_uploaded_file(lugar temporário, lugar definitivo)
        move_uploaded_file(
            $_FILES['upload']['tmp_name'],
            $arquivo
        );

        //var_dump($_FILES);
    }

    $stmt = $bd->prepare('UPDATE produto SET 
                                titulo = :titulo, 
                                categoria = :categoria, 
                                preco = :preco, 
                                modelo = :modelo, 
                                marca = :marca,
                                descricao = :descricao,
                                imagem = :imagem
                                WHERE
                                id = :id');


    if ($stmt->execute([
        ':titulo' => $titulo,
        ':categoria' => $categoria,
        ':preco' => $preco,
        ':modelo' => $modelo,
        ':marca' => $marca,
        ':descricao' => $descricao,
        ':imagem' => $arquivo,
        ':id' => $id
    ])) {

        //header('Location: ../telas/formlogin.html');       
        
        header('location:../crud/crud.php');
    
    } else {
        echo "Erro ao tentar gravar!";
    }
} else {
    echo 'Preencha todos os campos';
}
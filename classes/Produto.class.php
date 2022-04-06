<?php

class Produto
{

    public $titulo;
    public $opcao;
    public $preco;
    public $modelo;
    public $marca;
    public $descricao;
    public $bd;

    public function __construct($bd, $post)
    {
        $this->titulo = $post['titulo'] ?? false;
        $this->opcao = $post['opcao'];
        $this->preco = $post['preco'];
        $this->modelo = $post['modelo'];
        $this->marca = $post['marca'];
        $this->descricao = $post['descricao'];
        $this->bd = $bd;
    }

    public function cadastrar()
    {

        if ($this->titulo && $this->opcao && $this->preco && $this->marca && $this->descricao) {

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

                $this->arquivo = 'imagem-produto/' . rand(1, 9999999999) . 'user.jpg';

                //para um local definitivo. move_uploaded_file(lugar temporário, lugar definitivo)
                move_uploaded_file(
                    $_FILES['upload']['tmp_name'],
                    $this->arquivo
                );

                //var_dump($_FILES);
            }

            $stmt = $this->bd->prepare('INSERT INTO produto (titulo, categoria, preco, modelo, marca, descricao, imagem)
                                                 VALUES (:titulo, :opcao, :preco, :modelo, :marca, :descricao, :imagem)');

            if ($stmt->execute([
                ':titulo' => $this->titulo,
                ':opcao' => $this->opcao,
                ':preco' => $this->preco,
                ':modelo' => $this->modelo,
                ':marca' => $this->marca,
                ':descricao' => $this->descricao,
                ':imagem' => $this->arquivo
            ])) {

                //header('Location: ../telas/formlogin.html');       

                // header('location:../crud/crud.php');
                echo "Success";
            } else {
                echo "Erro ao tentar gravar!";
            }
        } else {
            echo 'Preencha todos os campos';
        }
    }
}

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../telas/header.php';
include '../telas/navbar.php';
?>

<link rel="stylesheet" href="../css/catalogo.css">

<main class="">

    <div class="text-center d-flex align-items-center justify-content-center" style="background-color: #DCDCDC; height:80px;"> 
        <h3 class=" text-uppercase font-weight-ligth" style="color: Rgb(20, 124, 162); font-weight: lighter"> Catálogo </h3>
    </div>

    <section class="container"> 
        <div class="row justify-content-center pb-4">
            <?php

            include '../banco/conecta.php';

            $query = $bd->query("SELECT * FROM produto");
            $registros = $query->fetchAll();



            foreach ($registros as $registro) {
            ?>
                <div class="card mx-4 pt-4 pb-3 mt-3" style="width: 18rem;">
                    <div class="box-img">
                        <img src="<?php echo "http://localhost:8080/Projeto-PI/produto/" . $registro['imagem'] ?>" id="imgProduto" class="card-img-top" alt="...">
                    </div>
                    <section class="card-body my-auto  ">
                        <h5 class="card-title" id="titulo"><?php echo $registro['titulo'] ?></h5>
                        <p class="card-text" id="descricao"><?php echo $registro['descricao'] ?></p>
                        <button class="botao btn " id="btnProduto" value="<?php $registro['id'] ?>"><a href="vitrineProduto.php?id=<?php echo $registro['id'] ?>" class="text-decoration-none text-reset">Ver Produto</a></button>
                    </section>
                </div>
            <?php
            }
            ?>
        </div>
    </section>


</main>

<div style="background-color: rgb(20, 124, 162);">
    <?php
    include '../telas/footer.php';
    ?>
</div>
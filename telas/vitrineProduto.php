<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../telas/header.php';
include '../telas/navbar.php';
?>

<link rel="stylesheet" href="../css/vitrineProduto.css">

<main>

    <?php

    include '../banco/conecta.php';

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $query = $bd->query("SELECT * FROM produto WHERE id = $id");
    $registros = $query->fetchAll();

    foreach ($registros as $registro) :

    ?>
    
        <!--CARROuSSEL-->
          <!-- <section class="pt-2 container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

           <div class="carousel-inner">

                <div class="carousel-item text-center active" data-bs-interval="5000">
                    <img src="../imagens/carrosel-2.png" class="" alt="...">
                </div>

                <div class="carousel-item text-center" data-bs-interval="5000">
                    <img src="../imagens/carrosel-2.png" class="" alt="...">

                </div>

                <div class="carousel-item text-center">
                    <img src="../imagens/carrosel-2.png" class="" alt="...">
                    <div class="carousel-caption d-none d-md-block"> </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> -->

    <div class="text-center d-flex align-items-center justify-content-center " style="background-color: #DCDCDC; height:80px;"> 
        <h3 class=" text-uppercase font-weight-ligth"  style="color: rgb(20, 124, 162); font-weight: lighter" id="categoria"><?php echo $registro['categoria'] ?></h3>
    </div>

        <!-- <h2 class="text-center" id="categoria"><?php echo $registro['categoria'] ?></h2> -->

        <section class="container d-flex text-center justify-content-center align-items-center pt-3">
            <div class="row">

                <div class="col">
                    <img src="<?php echo "http://localhost:8080/Projeto-PI/produto/" . $registro['imagem'] ?>" alt="" class="box-img">
                </div>

                <div class="col">

                    <h3 id="nomeProduto"><?php echo $registro['titulo'] ?></h3>
                    <p id="descProduto" class="pt-2">
                        <?php echo $registro['descricao'] ?>
                    </p>

                    <section class="pt-2">
                        <spam>Preço Aluguel: </spam>
                        <spam id="precoAluguel"><?php echo $registro['preco'] ?></spam>
                    </section>


                    <section class="pt-2">
                        <spam class="">Marca: </spam>
                        <spam id="marca"> <?php echo $registro['marca'] ?></spam>
                    </section>

                    <section class="pt-2">
                        <spam>Modelo: </spam>
                        <spam id="modelo"> <?php echo $registro['modelo'] ?></spam>
                    </section>


                    <spam class="d-block pt-2">Tempo Aluguel</spam>
                    <div class=" d-flex text-center justify-content-center">
                        <select class="form-select w-75 ">
                            <option value="1dia" id="1dia">1 dia</option>
                            <option value="7dias" id="2dias">7 dias</option>
                            <option value="15dias" id="3dias">15 dias</option>
                            <option value="30dias" id="4dias">30 dias</option>
                        </select>
                    </div>


                    <button class="botao btn btn-lg btn-success display-6 w-50 fs-5 white mt-4">
                        <a href="#" class="text-decoration-none text-reset" id="alugarProduto">Alugar</a>
                    </button>

                </div>

            </div>
        </section>
    <?php
    endforeach
    ?>
</main>

<div style="background-color: rgb(20, 124, 162);">
    <?php 
       include '../telas/footer.php';
    ?>
  </div>
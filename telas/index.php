<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //session_start();
  // Faça login antes

  // if(!isset($_SESSION['id'])){
  //     echo "Faça o login antes";
  //     exit();
  //   } 
   //require_once('banco/conecta.php');



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">

    <title>Rentall</title>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous">
      </script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
      <link rel="stylesheet" href="../css/index.css">
      <link rel="stylesheet" href="../css/footer.css">

</head>

  <?php  
      include '../telas/navbar.php';
  ?>

  
 

  <main>
    <!--CARROuSSEL-->
    <section class="pt-2">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item text-center active" data-bs-interval="5000">
            <img src="../imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item text-center" data-bs-interval="5000">
            <img src="../imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item text-center">
            <img src="../imagens/carrousel.png" class="" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
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
    </section>

  </main>
  <section class="my-5 container">

    <div class="row  justify-content-center ">
      <div class=" p-3 col-2 border border-2 border-dark text-center my-1 mx-1 ">

        <img src="../imagens/ferramentas.png" width="40%" class="my-1">
        <h3 class="fs-4">Ferramentas</h3>
      </div>
      <div class=" p-1 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/controle-de-video-game.png" width="50%">
        <h3 class="fs-4">games</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/informatica (2).png" width="50%">
        <h3 class="fs-4">Informatica</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/sports.png" width="50%">
        <h3 class="fs-4">Esportes</h3>
      </div>
      <div class=" p-2 col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/instrumentos-musicais.png" width="50%">
        <h3 class="fs-4">Instrumentos Musicais</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/batedeira.png" width="50%">
        <h3 class="fs-4">Eletroportateis</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/moto.png" width="50%">
        <h3 class="fs-4">Veiculos</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/camera.png" width="50%">
        <h3 class="fs-4">Audio e Video</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/moda.png" width="50%">
        <h3>Moda</h3>
      </div>
      <div class="col-2 border border-2 border-dark text-center my-1 mx-1">

        <img src="../imagens/brinquedos-do-bebe.png" width="50%">
        <h3>Brinquedos</h3>
      </div>

    </div>
    </div>

  </section>

  <div class="container-fluid">
    <?php 
       include '../telas/footer.php';
    ?>
  </div>
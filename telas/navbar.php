

<nav class="navbar navbar-light " style="background-color:rgb(20, 124, 162);">

  <div class="container-fluid">
    <div class="row w-100">
      <div class="col-2">
        <a class="navbar-brand" href="../telas/index.php">
          <img src="../imagens/logo-completo-branco.png" alt="" width="150px" class="d-inline-block align-text-center">
        </a>
      </div>

      <div class="col-8">
        <div class="justify-content-center mt-2 row" style="margin-left: 70px;">
          <form class="d-flex col-8">
            <input class="form-control me-2" style = "min-width: auto; "type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline" style="color:rgb(20, 124, 162); background-color: white; border-color:white;" type="submit">Search</button>
          </form>
        </div>
      </div>

      <div class="col-2 text-end">

      
        <?php

        session_start();
            

            if(!empty($_SESSION)){
              ?>  
                  <span style= "text-decoration: none; color: white; font-weight:lighter">  <?php echo " Olá, {$_SESSION['nome']} " ?>  </span>
                  <a href= "../login/sair.php" style= "text-decoration: none;"> <img src="../imagens/sair.png" width="25px" style= "margin-left: 15px;"> </a>

              <?php
            } else {
              ?>
                 <a href="../telas/formlogin.php">  <img src="../imagens/entrar.png" width="40px" > </a>
              <?php
            }
        ?>

      </div>
    </div>

    <div class="row w-100">
      <div class="col-12">
      <ul class="nav justify-content-center">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"  aria-expanded="false" style="color:white; font-weight:lighter" id="navbarDropdown"  > Categorias </a> 
          
            
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Esportes</a></li>
            <li><a class="dropdown-item" href="#">Games</a></li>
            <li><a class="dropdown-item" href="#">Eletroportateis</a></li>
            <li><a class="dropdown-item" href="#">Ferramentas</a></li>

          </ul>
        </li>

 
        <li class="nav-item">
          <a class="nav-link" href="../telas/catalogo.php" style="color:white; font-weight:lighter">Catálogo</a>
        </li>
        
        

        <?php  
        if(!empty($_SESSION)){  
          ?>
            <li class="nav-item">
          <a class="nav-link" href="../crud/crud.php" style="color:white; font-weight:lighter"> Meus Produtos </a>            
            </li>

            <li class="nav-item">
          <a class="nav-link" href="../telas/formProduto.php" style="color:white; font-weight:lighter">Cadastrar produto</a>
            </li>   
          
          <?php  
          }  
          ?>

      </ul>
      </div>

    </div>


  </div>

</nav>




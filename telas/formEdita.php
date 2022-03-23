<?php
include 'header.php';

?>

<link rel="stylesheet" href="../css/formProduto.css">
</head>


<body>
  <main class="container">

    <h2> Editar Produto </h2>

    <form class="needs-validation" novalidate method="post" action="../produto/editaProduto.php" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value ="<?php echo  $id ?? ''; ?>">

    <section class="mb-3 ">
        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo Produto" required value="<?php echo $produto['titulo'] ?? ''; ?>">
    </section>

      <div class="mb-3">
        <select name="categoria" class="form-select" required>
          <option> Categoria </option>
          <option value="Eletronicos" id="eletronicos" <?php echo $produto ['categoria'] == 'Eletronicos' ? 'selected' : ''; ?>>Eletrônicos</option>
          <option value="Esportes" id="esportes" <?php echo $produto ['categoria'] == 'Esportes' ? 'selected' : ''; ?>>Esportes</option>
          <option value="Ferramentas" id="ferramentas" <?php echo $produto ['categoria'] == 'Ferramentas' ? 'selected' : ''; ?>>Ferramentas</option>
          <option value="Games" id="games" <?php echo $produto ['categoria'] == 'Games' ? 'selected' : ''; ?>>Games</option>
          <option value="Domestico" id="domestico" <?php echo $produto ['categoria'] == 'Domestico' ? 'selected' : ''; ?>>Utensílios Doméstico</option>
        </select>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">R$</span>
        <input type="number" name="preco" id="preco" min="0" class="form-control" placeholder=" Valor diária" required value="<?php echo $produto['preco'] ?? ''; ?>">
        <span class="input-group-text">,00</span>
      </div>

      <div class="mb-3">
        <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo" required value="<?php echo $produto['modelo'] ?? ''; ?>">
        <div class="underline"> </div>
      </div>

      <div class="mb-3">
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" required value="<?php echo $produto['marca'] ?? ''; ?>">
        <div class="underline"> </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">Descrição</span>
        <textarea name="descricao" id="descricao" class="form-control" aria-label="With textarea" required><?php echo $produto['descricao'] ?? ''; ?></textarea>
      </div>


      <div class="input-group ">
        <input type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required value="<?php echo $produto['imagem'] ?? ''; ?>">
      </div>

      <input type="submit" value="Alterar dados">

      <a class="text-center mt-4" style="text-decoration: none; color: #808080" href="../crud/crud.php">
      <spam> Cancelar </spam>
      </a>

      </div>
    </form>

  </main>

</body>

</html>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
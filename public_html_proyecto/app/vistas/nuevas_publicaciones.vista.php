<?php require "_head.php"; ?>
<div class="jumbotron">
        <div class="container">
            <h2 class="font-weight-normal">Bienvenid@ <?php echo $_SESSION['usuario_nombre']; ?> a tu página principal.</h2>
            <p class="lead">Empieza a disfrutar de tu espacio.</p>
            <a href='nuevas_publicaciones.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear publicación</a><br><br>
            <a href='formulario.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear categoria</a>
        </div>
        <br>

<body>
<div class="row">
    <form action="" method="post" class="col-md-3" enctype="multipart/form-data">
        <h3>Crear publicacion</h3>
        <hr>
        <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        <select class="form-control" name="selectCategoria" required>
            

      <?php
      foreach ($categorias as $categoria){
        echo "<option value= '{$categoria ['id']}'>{$categoria['nombre']}</option>";
      }

      ?>

        </select>
        <input class="form-control" type="file" name="inputArchivo">
        <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
    </form>
    </div>
     <!-- Mostrar los datos de la base de datos -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <body>
  <?php
    // Recorrer todas las publicaciones
    foreach($listadoPublicaciones as $publicacion) {
        echo "<tr>
                <th>{$publicacion['id']}</th>
                <td>{$publicacion['titulo']}</td>
                <td>{$publicacion['descripcion']}</td>
                <td>{$publicacion['id_categoria']}</td>
            </tr>";
    }
  ?>
  <img src="recursos/archivos/disfruten.jpg" alt="difruten" height="300" width="400">
</body>

</html>
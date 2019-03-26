<?php require "_head.php"; ?>

<div class="jumbotron">
        <div class="container">
            <h2 class="font-weight-normal">Bienvenid@ <?php echo $_SESSION['usuario_nombre']; ?> a tu página principal.</h2>
            <p class="lead">Empieza a disfrutar de tu espacio.</p>
            <a href='nuevas_publicaciones.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear publicación</a><br><br>
            <a href='formulario.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear categoria</a>
        </div>
    </div>
<body>
<div class="row">
    <form action="" method="post" class="col-md-3" enctype="multipart/form-data">
        <h3>Crear categorias</h3>
        <hr>
         <input type="hidden" name="id_categoria" value="<?php echo $_GET['id'] ?? "" ?>">
        <input class="form-control" type="text" name="inputnombre" value="<?php echo $_GET['nombre'] ?? "" ?>" placeholder="Nombre" required><br>
        <button class="btn btn-primary" name="btnCrearcategorias">crear categorias</button>
    </form>
    </div>
    <br>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">nombre</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  // recorrer categorias 
  foreach($categorias as $categoria){
      echo "<tr>
      <th>{$categoria['id']}</th>
      <td>{$categoria['nombre']}</td>
      
      <td><a href='formulario.php?accion=eliminar&id={$categoria['id']}'>Eliminar</a></td>
      <td><a href='formulario.php?accion=editar&id={$categoria['id']}&nombre={$categoria['nombre']}'>Editar</a></td>

      </tr>";
    $titulo = "crear categorias"; 
  }
    ?>
</tbody>

</html>
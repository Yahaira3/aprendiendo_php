<?php require "_head.php"; ?>

<body>
<div class="row">
    <form action="" method="post" class="col-md-3" enctype="multipart/form-data">
        <h3>Crear categorias</h3>
        <hr>
        <input class="form-control" type="text" name="inputnombre" placeholder="Nombre" required><br>
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
      <td><a href=''>Editar</a></td>
      <td><a href=''>Eliminar</a></td>

      </tr>";
     
  }
    ?>
</tbody>

</html>
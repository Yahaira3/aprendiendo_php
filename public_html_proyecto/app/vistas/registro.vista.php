<?php require "_head.php";?>

<body class="bg-dark text-white text-center">
    <div class="container">
        <div id="login" class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <h1><i class="fab fa-angellist"></i>
                       Divas</h1>
                    <h3>Registrarse</h3>
                    <hr>
                    <input class="form-control mb-2" type="text" name="inputName" placeholder="Nombre" required
                        autofocus>
                    <input class="form-control mb-2" type="text" name="inputEmail" placeholder="Email" required>
                    <input class="form-control mb-2" type="text" name="inputUser" placeholder="Usuario" required
                        autocapitalize="off">
                    <input class="form-control mb-2 " type="password" name="inputPassword" placeholder="Contraseña"
                        required>
                    <button class="btn btn-primary btn-block" type="submit"> Registrar </button>
                    <hr>

                    <?php
                    if(isset($mensaje)){
                        echo $mensaje;
                    }
                    
                    ?>
                    <div>¿Tienes una cuenta? <a href="login.php">Inicia sesión</a></div>
                </form>
            </div>
            <div class="col-md-4">
                <h5>Usuario Registrado</h5>
                
                    <ul>
                        <?php
                 foreach ($usuarios as $usuario){
                     echo "<li>tu{$usuario["nombre"]} y {$usuario["username"]} y {$usuario["correo"]}</li>";
                 }
                 ?>

                    </ul>

            </div>
        </div>
    </div>

    <!--incluir js de bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>
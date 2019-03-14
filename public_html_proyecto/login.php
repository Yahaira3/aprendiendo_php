<?php
require "app/conexion.php";
// Verificar si el inputUser existe
if (isset($_POST['inputUser'])) {
    $datosUsuario = array(
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );
    // Preparar el query
    $sql = 'SELECT * FROM usuarios WHERE username = :username AND password = :password ';
    $comando = $conexion->prepare($sql);
    // Ejecutar el query
    $comando->execute($datosUsuario);
    // Traer los datos
    $resultado = $comando->fetchAll();
    $cantidadRegistros = count($resultado);
    if ($cantidadRegistros > 0) {
        die('Bienvenido');
    } else {
        die('Usuario no existe');
    }
}
$titulo = "yahairajimenez - Iniciar sesión";
require "app/vistas/login.vista.php"; 
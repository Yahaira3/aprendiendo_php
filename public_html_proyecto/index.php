<?php
$saludo = "Bienvenido a mi sitio web yahairajimenez";
$titulo="Index";
require "app/vistas/index.vista.php";

session_start();
// Si el usuario está logeado no puede ver esta página
if(isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}

$mensajesError = array();

require vistas("index");

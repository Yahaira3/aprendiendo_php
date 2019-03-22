<?php
$saludo = "Bienvenido a mi sitio web yahairajimenez";
$titulo="Index";
session_start();
require "app/mis_funciones.php";
// Si el usuario está logeado no puede ver esta página
if(isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}

$mensajesError = array();

require vista("index");

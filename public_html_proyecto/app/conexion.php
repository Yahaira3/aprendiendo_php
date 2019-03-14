<?php
$host = "127.0.0.1";
$dbname = "proyecto_db";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// cambiar los valores para produccion 
if ($_SERVER['SERVER_NAME'] == "yahairajimenez.000webhostapp.com") {
    $host = "localhost";
    $dbname = "id8904328_proyecto_db";
    $user = "id8904328_yahaira";
    $password = "29yaraly"; 
}
 $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);
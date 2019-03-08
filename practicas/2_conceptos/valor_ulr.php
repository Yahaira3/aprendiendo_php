<?php 
$nombre = $_GET["nombre"];
echo $nombre."<br><br>";
var_dump($nombre);

$edad = 22;
echo "tu edad es:". $edad;
echo "<hr>";
var_dump($edad);
echo "<hr>";

$poseecasa = true;

echo "posee casa".$poseecasa;
echo "<br>";
var_dump($poseecasa);
echo "<hr>";
echo "el valor del pais es : ";
echo $_GET["pais"];
echo "<pre>";
var_dump($_GET);
echo "</pre>";
?>
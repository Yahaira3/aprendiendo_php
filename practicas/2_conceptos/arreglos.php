<?php 

//crear arrays usando la palabra arrays
$frutas = array("Mango","Pera");

echo $frutas [0]."<br>";
$diasemanas = array("Lunes","Martes","Miercoles","Mueves","Viernes","Sabados","Domingo");

echo "<h3>Los Dias de las semanas son:</h3>.<br>";

echo $diasemanas[0]."<br>";
echo $diasemanas[1]."<br>";
echo $diasemanas[2]."<br>";
echo $diasemanas[3]."<br>";
echo $diasemanas[4]."<br>";
echo $diasemanas[5]."<br>";
echo $diasemanas[6]."<br>";

//array con los meses del año
$meses=["Enero","Febrero","Marzo","Abril","Mayo","junio","julio","Agosto","septiembre","octubre","novembre","diciembre"];

echo "<h2>Esto son los mese del año:</h2>.<br>";


echo $meses[0]."<br>";
echo $meses[1]."<br>";
echo $meses[2]."<br>";
echo $meses[3]."<br>";
echo $meses[4]."<br>";
echo $meses[5]."<br>";
echo $meses[6]."<br>";
echo $meses[7]."<br>";
echo $meses[8]."<br>";
echo $meses[9]."<br>";
echo $meses[10]."<br>";
echo $meses[11]."<br>";

//recorrer el array de meses

echo "<h1>meses</h1>";
foreach ($meses as $mes)
{
    echo $mes ."<br>";
}



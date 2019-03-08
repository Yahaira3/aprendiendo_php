  <?php
$nombre = $_GET["nombre"] ?? "NOMBRE";

$apellido = $_GET["apellido"]  ?? "APELLIDO";

$edad = $_GET["edad"]  ?? "EDAD";
$ciudad = $_GET["ciudad"]  ?? "CIUDAD";
$color =$_GET["color"] ?? "red";
echo "<style>
body { 
    background-color: $color;
    font-size: {$edad}px;
}
</style>";

//mostrar un mensaje estatico
//echo <p>"Bienvenido pedro garcia, tiene 10 años y vives en california</p>";

//mosrar un mensaje dinamico 
//1.el valor de la variable  se muestra en comillas doble
//echo "<p>Bienvenido pedro garcia, tiene 10 años y vives en california</p>";

//1.1 El valor de la variable no se muestra en comillas dobles 
echo "<p>Bienvenido $nombre $apellido, tiene $edad años y vives en $ciudad</p>";
 
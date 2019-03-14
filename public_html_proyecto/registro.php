<?php
$Titulo ="Registro";

$host = "127.0.0.1";
$dbname = "proyecto_db";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    //cambiar los  valores para producion 
  if ($_SERVER['SERVER_NAME'] == "yahairajimenez.000webhostapp.com") {
    $host = "localhost";
    $dbname = "id8904328_proyecto_db";
    $user = "id8904328_yahaira";
    $password = "29yaraly"; 
}

try {
    // 1. Conectarnos a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);
    // 2. Preparar el SQL (query)
    $sql = "SELECT * FROM usuarios";
    $comando = $conexion->prepare($sql);
    // 3. Ejecutar el SQL (query)
    $comando->execute();
    // 4. Traer los datos
    $usuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
    /*echo "<pre>";
    var_export($usuarios);
    echo "</pre>";*/
} catch(PDOException $e) {
    echo $e->getMessage();
}
 
 if (isset($_POST['inputName'])){
    // 
    echo "<pre>";
    var_export($_POST);
    echo "</pre>";
    $datosUsuarios = array(
        'nombre' => $_POST['inputName'],
        'correo' => $_POST['inputEmail'],
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );
    
    echo "<pre>";
    var_export($datosUsuarios);
    echo "</pre>";
    
    // Validar 
    if (false) {
    
    } else {
        // Enviar los datos
        // 1. Preparar el SQL (query)
        $sqlInsert = "INSERT INTO usuarios(nombre, correo, username, password)
                VALUES (:nombre, :correo, :username, :password)";
        $comando = $conexion->prepare($sqlInsert);
    
        // 2. Ejecutarlo
         $respueta = $comando->execute($datosUsuarios);
        if ($respueta == true) {
            // Redireccionar a la pagina del login
            header("Location: /learning_php/public_html_proyecto/login.php");
        } else {
            echo "No se insertaron los datos";
        }
    }
}

require "app/vistas/registro.vista.php";
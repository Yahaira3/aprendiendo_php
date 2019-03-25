<?php
session_start();
require "app/mis_funciones.php";
require "app/conexion.php";
/* Codigo para guardar la publicacion */
//  Verificar que el usuario haya hecho click en el boton
if(isset($_POST['btncategoria'])) {
    // Guardar los datos en un array para insertarlos a la base de datos
    $categorias = array(
        'nombre' => $_POST['inputcategorias'],
    );
    // 1. Preparar el query
    $sql = "INSERT INTO categorias(nombre) 
            VALUES (:nombre)";
    $comando = $conexion->prepare($sql);

    // 2. Ejecutar el query, con los datos de la publicacion
    $comando->execute($categorias);

    // 3. Traer los datos
    $resultado = $comando->rowCount();

    if ($resultado > 0) {
        echo "Datos insertados :D";
    } else {
        echo "Los datos no fueron insertados :(";
    }

    $titulo="crear categorias";

$categorias=selectcategorias($conexion);


require vista("formulario");
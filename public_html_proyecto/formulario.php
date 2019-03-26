<?php
session_start();
require "app/mis_funciones.php";
require "app/conexion.php";
/* Codigo para guardar la publicacion */
//  Verificar que el usuario haya hecho click en el boton
if(isset($_POST['btnCrearcategorias'])) {
   
     if ($_GET['accion'] == 'actualizar' && isset($_GET['id'])) {
        // Logica de actualizar
        $sql = '';
    } else {
            // Guardar los datos en un array para insertarlos a la base de datos
        $categorias = array(
            'nombre' => $_POST['inputnombre'],
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
    }


    $titulo="crear categorias";
}
$categorias=selectcategorias($conexion);

// Verificar las variables por la URL
if ( isset($_GET['accion']) && isset($_GET['id']) ) {
    // Guardar el id en una variable
    $idCategoria = $_GET['id'];
    // Accion de borrar
    if ($_GET['accion'] == 'eliminar') {
        echo "Logica para eliminar";
        //1.preparar el query.
         $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";
        $comando = $conxion->prepare($sql);
        //2. ejecutar el query.
        $comando->execute ();
        //3. traer lo datos.
        $resultado = $comnado->rowcount();

        // Borrado fisico
        //$sql = "DELETE FROM categorias WHERE id = $idCategoria ";
        // Borrado logico
        //$sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";
    }
   
}


require vista("formulario");
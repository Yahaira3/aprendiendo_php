<?php
function miserrores($errornumero,$errormensaje,$errorarchivo,$errorlinea){
 echo "<div class=alert alert-danger>ha ocurido un error</div> ";
 echo "tipo de error : $errornumero <br>";
 echo "mensaje : $errormensaje <br>";
 echo "en el archivo: $errorarchivo <br>";
 echo "En la linea: $errorlinea <br>";
}

set_error_handler("miserrores");

function imprimir($valor_recibido) {
    echo "<pre>";
    var_export($valor_recibido);
    echo "</pre>";
}
function nombre() {
    return ".sa.dffsjsfdjafdsasdffsd";
}
function vista($nombre) {
    return "app/vistas/$nombre.vista.php";
}
function selectPublicaciones($conexion) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $publicaciones = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $publicaciones;
}

function selectPublicacionesDelUsuario($conexion, $usuario_id) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM publicaciones where creado_por = $usuario_id");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $publicaciones = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $publicaciones;
}

function comprobarUsuarioExiste($conexion, $correo, $username) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM usuarios WHERE correo = '$correo' OR username = '$username'");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectcategorias($conexion) {
    // 1. Preparar el query
    $comando = $conexion->prepare("SELECT * FROM categorias where eliminado = false");
    // 2. Ejecutar el query
    $comando->execute();
    // 3. Traer los datos
    $categorias = $comando->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
}
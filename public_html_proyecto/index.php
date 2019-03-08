<?php
$saludo = "Bienvenido a mi sitio web yahairajimenez"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cambiar el color del tema en google chrome-->
    <meta name="theme-color"content="#db5945">
    <title><?php echo $saludo;?></title>
</head>
<body>
<div class="container">
<h1><?= $saludo; ?></h1>
</div>
    
</body>
</html>
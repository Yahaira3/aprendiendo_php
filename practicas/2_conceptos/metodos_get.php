<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usando el metodo GET</title>
</head>
<body>
<a href="saludo.php?nombre=yahaira&apellido=jimenez&edad=22&ciudad=santiago">saludar a yahaira</a>
<form action="saludo.php">


<div>
<label for="">nombre</label>
<input type="text" name="nombre">
</div>

<div>
<label for="">apellido</label>
<input type="text" name="apellido">
</div>

<div>
<label for="">edad</label>
<input type="text" name="edad">
</div>

<div>
<label for="">ciudad</label>
<input type="text" name="ciudad">
</div>

<div>
<label for="">Color</label>
<input type="color" name="color">
</div>
<!--- --->


<button>enviar datos</button>

</form> 
<pre>
<?php var_dump($_GET);?>
</pre>
</body>
</html>
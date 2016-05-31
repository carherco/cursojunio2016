<?php 
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
?> 
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo 11 - Saludo</title>
</head>

<body>
<h1>Hola <?php echo $nombre." ".$apellido ?>, bienvenid@.</h1>

<p>¿Qué operación desea realizar?</p>

<ul>
    <li><a href="sumar.php">Sumar</a></li>
    <li><a href="restar.php">Restar</a></li>
</ul>


</body>

</html>
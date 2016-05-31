<?php $title = "Ejemplo 12 - Saludo"; ?>

<?php 
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
?> 

<?php
include 'plantillas/cabecera.php';
?>

<h1>Hola <?php echo $nombre." ".$apellido ?>, bienvenid@.</h1>

<p>¿Qué operación desea realizar?</p>

<ul>
    <li><a href="sumar.php">Sumar</a></li>
    <li><a href="restar.php">Restar</a></li>
</ul>

<?php
include 'plantillas/pie.php';
?>
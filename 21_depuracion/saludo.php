<?php $title = "Ejemplo 12 - Saludo"; ?>

<?php 
session_start();
if(isset($_REQUEST['nombre'])) {
    $_SESSION['nombre'] = $_REQUEST['nombre'];
}

if(isset($_REQUEST['apellido'])) {
    $_SESSION['apellido'] = $_REQUEST['apellido'];
}
?> 

<?php
include 'plantillas/cabecera.php';
?>

<h1>Hola <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'] ?>, bienvenid@.</h1>

<p>¿Qué operación desea realizar?</p>

<ul>
    <li><a href="sumar.php">Sumar</a></li>
    <li><a href="restar.php">Restar</a></li>
</ul>

<?php
include 'plantillas/pie.php';
?>
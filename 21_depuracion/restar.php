<?php $title = "Ejemplo 11 - Restar"; ?>

<?php
include 'plantillas/cabecera.php';
?>

<h1>Bienvenido a nuestra web.</h1>

<p>Escriba la operación que desea realizar</p>

<form method="POST" action="resultado-resta.php">
    <input type="number" name="num1"/>
    -
    <input type="number" name="num1"/>
    <button type="submit">Calcular</button>
</form>

<a href="saludo.php">Volver</a>

<?php
include 'plantillas/pie.php';
?>
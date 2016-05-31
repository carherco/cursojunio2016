<?php $title = "Ejemplo 12 - Sumar"; ?>

<?php
include 'plantillas/cabecera.php';
?>

<h1>Bienvenido a nuestra web.</h1>

<p>Escriba la operación que desea realizar</p>

<form method="POST" action="resultado-suma.php">
    <input type="number" name="num1"/>
    +
    <input type="number" name="num2"/>
    <button type="submit">Calcular</button>
</form>

<a href="saludo.php">Volver</a>

<?php
include 'plantillas/pie.php';
?>
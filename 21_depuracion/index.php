<?php
include 'plantillas/cabecera.php';
?>

<h1>Bienvenid@ a nuestra web.</h1>

<form method="GET" action="saludo.php">
    <label>Por favor, dinos tu nombre y apellido:</label>
    <input type="text" name="nombre" placeholder="nombre"/>
    <input type="text" name="apellido" placeholder="apellido"/>
    <button type="submit">Continuar</button>
</form>

<?php
include 'plantillas/pie.php';
?>
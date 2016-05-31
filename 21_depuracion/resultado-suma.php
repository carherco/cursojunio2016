<?php $title = "Ejemplo 11 - Resultado"; ?>

<?php
include 'plantillas/cabecera.php';
require 'lib/funciones.php';
?>

<p>El resultado de la suma es: 
    <strong><?php echo suma($_REQUEST['num1'],$_REQUEST['num2']); ?></strong>
</p>
<a href="sumar.php">Volver</a>

<?php
include 'plantillas/pie.php';
?>

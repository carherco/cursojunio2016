<?php $title = "Ejemplo 11 - Resultado"; ?>

<?php
include 'plantillas/cabecera.php';
?>

    <p>El resultado de la suma es: 
        <strong>
            
        <?php 
        $a = $_REQUEST['num1'];
        $b = $_REQUEST['num2'];
        
        $resultado = $a - $b;
        
        echo $resultado;
        
        ?> 
        </strong>
    </p>
<a href="restar.php">Volver</a>

<?php
include 'plantillas/pie.php';
?>

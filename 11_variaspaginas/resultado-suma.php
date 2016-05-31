<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo 11 - Resultado</title>
</head>

<body>
    <p>El resultado de la suma es: 
        <strong>
            
        <?php 
        $a = $_REQUEST['num1'];
        $b = $_REQUEST['num2'];
        
        $resultado = $a + $b;
        
        echo $resultado;
        
        ?> 
        </strong>
    </p>
<a href="sumar.php">Volver</a>
</body>

</html>

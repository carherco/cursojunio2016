<?php
include 'plantillas/cabecera.php';
?>

<h1>try - catch</h1>

<pre>
    
try {
    throw new Exception("Algún mensaje de error");
} catch(Exception $e) {
    echo $e->getMessage();
}

</pre>


<?php
try {
    throw new Exception("Algún mensaje de error");
} catch(Exception $e) {
    echo $e->getMessage();
}
?>

<?php
include 'plantillas/pie.php';
?>
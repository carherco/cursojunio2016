<?php
include 'plantillas/cabecera.php';
?>

<?php
include 'plantillas/menu.php';
?>

<h2>$_ENV</h2>

<pre>
    
print_r($_ENV);

</pre>


<?php
echo "<pre>";
print_r($_ENV);
echo "</pre>";
?>

<?php
include 'plantillas/pie.php';
?>
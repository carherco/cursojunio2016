<?php
include 'plantillas/cabecera.php';
?>

<?php
include 'plantillas/menu.php';
?>

<h2>$GLOBALS</h2>

<pre>
    
function test() {
    $foo = "variable local";

    echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "\n";
    echo '$foo en el ámbito simple: ' . $foo . "\n";
}

$foo = "Contenido de ejemplo";
test();

</pre>


<?php
function test() {
    $foo = "variable dentro de la función";

    echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "\n";
    echo '$foo en el ámbito simple: ' . $foo . "\n";
}

$foo = "variable fuera de la función";
test();
?>

<?php
include 'plantillas/pie.php';
?>
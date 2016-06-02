<?php
include 'plantillas/cabecera.php';
?>

<h1>instanceof</h1>

<pre>
    
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);

</pre>



<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>

<?php
include 'plantillas/pie.php';
?>
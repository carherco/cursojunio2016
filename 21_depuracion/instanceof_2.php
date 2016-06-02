<?php
include 'plantillas/cabecera.php';
?>

<h1>instanceof</h1>

<pre>
    
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);

</pre>



<?php
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
?>

<?php
include 'plantillas/pie.php';
?>
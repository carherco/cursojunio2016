<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros
$idelemento = $_REQUEST['id'];

//Llamada al servicio
$gestor = new GestorListas();
$gestor->borrarElementoLista($idelemento);


//No hay vista, se redirige a la página de verLista
header("Location: ".PROJECT_URL."verLista.php?id=1");
die();
<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros


//Llamada al servicio
$gestor = new GestorListas();
$listas = $gestor->dameListas();


//Vistas
$title = 'Listado';
include 'plantillas/generales/cabecera.html.php';

$datostabla = $listas;
include 'plantillas/index.html.php';

include 'plantillas/generales/pie.html.php';

<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros
$idelemento = $_REQUEST['id'];

//Llamada al servicio
$gestor = new GestorListas();
$gestor->destacharElementoLista($idelemento);

$lista = $gestor->buscarListaPorElemento($idelemento);
$idlista = $lista->getId();

//No hay vista, se redirige a la página de verLista
header("Location: ".PROJECT_URL."verLista.php?id=$idlista");
die();
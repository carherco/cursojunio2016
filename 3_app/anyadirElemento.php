<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros
$idlista = $_REQUEST['idlista'];
$nombre = $_REQUEST['nombre'];

//Llamada al servicio
$gestor = new GestorListas();
$gestor->anyadirElementoLista($idlista, $nombre);

//No hay vista, se redirige a la página de verLista
header("Location: ".PROJECT_URL."verLista.php?id=$idlista");
die();
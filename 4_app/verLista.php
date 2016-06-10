<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros
$idlista = $_REQUEST['id'];

//Llamada al servicio
$gestor = new GestorListas();
$lista = $gestor->dameLista($idlista);
$elementos = $gestor->dameElementosLista($idlista);



//Vistas
$title = $lista->getNombre();
include 'plantillas/generales/cabecera.html.php';

//$lista
$datostabla = $elementos;
include 'plantillas/verLista.html.php';

include 'plantillas/generales/pie.html.php';

<?php 
//Carga de librerías
include 'modelo/GestorListas.class.php';

//Recogida de parámetros
$idelemento = $_REQUEST['id'];

//Llamada al servicio
$gestor = new GestorListas();
//Primero busco la lista y luego borro el elemento, si no, no podré buscar la listad de algo que no existe
$lista = $gestor->buscarListaPorElemento($idelemento);
$gestor->borrarElementoLista($idelemento);


//No hay vista, se redirige a la página de verLista
$idlista = $lista->getId();
header("Location: ".PROJECT_URL."verLista.php?id=$idlista");
die();
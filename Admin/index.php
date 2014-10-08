<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);


/********************RUTEADOR DE REQUERIMIENTOS*********************************/

//include('./controller/Controller_inicio.php');
//include("./controller/controller_reclamos.php");
 /* array_key_exists('acction', $a)  
  isset($a[action])
  $a(acction)==='index.php';
*/
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='Home.tpl')
	{
		include_once("./Controller/ControllerUser.php");
	 	$inicio= new controllerUser();
		$inicio->Home();
	}	

else
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='ver_reclamos.tpl')
	{

		include_once("./Controller/ControllerUser.php");
	 	$reclamo= new controllerUser();
	 	$id_area=1;
		$reclamo->ver_reclamos($id_area);
	}	
else
	if (isset($_POST['fitro'])) //tine que haber un input oculto con este nombre
	{
		$filtro=$_POST["ordenar_por_sector_raiz"];
		include_once("./Controller/Controlador_reclamos.php");
	 	$reclamo= new controllerReclamos();
	 	$reclamo->Filtrar_reclamo($filtro);
		
	}



	

?>
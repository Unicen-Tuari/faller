<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);


/********************RUTEADOR DE REQUERIMIENTOS*********************************/

  
if 	(isset($_POST['Nombre_login']))
	{
			include_once("./Controller/ControllerUser.php");
			$ingresar = new controllerUser();
			$ingresar->login();
	}

else
	if (isset($_POST['filtro'])) //tine que haber un input oculto con este nombre
	{
			include_once("./Controller/ControllerUser.php");
		$reclamo= new controllerUser();
		$reclamo->ver_reclamos();
	}
else
	 if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include_once("./Controller/ControllerIndex.php");
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();
	}	
else
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='cerrar_sesion')
	{
		session_destroy();
		include "./Controller/ControllerIndex.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();
	}	


else
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='ver_reclamos')
	{
		include_once("./Controller/ControllerUser.php");
	 	$reclamo= new controllerUser();
		$reclamo->ver_reclamos();
	}	




	

?>
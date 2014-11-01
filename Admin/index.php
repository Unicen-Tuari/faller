<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);


/********************RUTEADOR DE REQUERIMIENTOS*********************************/

  
if 	(isset($_POST['Nombre_login']))
	{
			include_once("./Controller/controller_user.php");
			$ingresar = new controller_user();
			$ingresar->login();
	}

else
	if (isset($_POST['filtro'])) //tine que haber un input oculto con este nombre
	{
		include_once("./Controller/Controller_claims.php");
	 	$claims= new Controller_claims();
		$claims->view_claims();
	}
	
else
	if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='cerrar_sesion')
	{
		session_destroy();
		include "./Controller/ControllerIndex.php";
	 	$index= new controlador_index();
		$index->visualizar_inicio();
	}	


else
	if( array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='ver_reclamos')
	{
		include_once("./Controller/Controller_claims.php");
	 	$claims= new Controller_claims();
		$claims->view_claims();
	}	
else
	if( array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='view_claims_especific')
	{
		include_once("./Controller/Controller_claims.php");
	 	$claims= new Controller_claims();
		$claims->view_claims_especific();
	}

			/*ULTIMA ACCION */
else
	 if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include_once("./Controller/ControllerIndex.php");
	 	$index= new controlador_index();
		$index->visualizar_inicio();
	}


	

?>
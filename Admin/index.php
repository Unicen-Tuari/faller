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
	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='home')&&(isset($_SESSION['id'] )))
	 {
			include_once("./Controller/controller_user.php");
			$ingresar = new controller_user();
			$ingresar->home();
	}
else
	if (isset($_POST['filtro'])) //tine que haber un input oculto con este nombre
	{

		include_once("./Controller/Controller_claims.php");
	 	$claims= new Controller_claims();
		$claims->view_claims();
	}
else
	if 	(isset($_POST['id_claim_to_respond']))
	{
		include_once("./Controller/Controller_claims.php");
	 	$claims= new Controller_claims();
		$claims->respond_claims();
	}
else 	
	if (isset($_POST['pass_registrarse']))
	{
			include_once("./Controller/controller_user.php");
			$sign_in = new controller_user();
			$sign_in->sign_in();

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
	if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='View_employers')
	{
			include_once("./Controller/controller_user.php");
			$new_employers = new controller_user();
			$new_employers->employers();
	}
else		
if 	(isset($_POST['id_empleado']))
	{
			include_once("./Controller/controller_user.php");
			$employes = new controller_user();
			$employes->employers_managment();
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
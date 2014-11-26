<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
//para la demostracion de el error de sesion:debo comentar el index y el cerrar sesion
//view-source:http://localhost/faller/reclamos_usuario/index.php?pass_login=1&email_login=franco.e.aller@gmail.com&pass=b

/********************RUTEADOR DE REQUERIMIENTOS*********************************/

if (isset($_REQUEST['id_person_of_reclaim']))//login email
		{

			include_once("./controller/ControllerUser.php");
			$log= new ControllerUser();
			$log->login_reclaim_email();

		}
else
	if ((isset($_REQUEST['pass_login']))&&(!isset($_REQUEST['id_claim_e'])))
		{
			include_once("./controller/ControllerUser.php");
			$log= new ControllerUser();
			$log->login();

		}

else 	
	if (isset($_POST['pass_registrarse']))
	{
		include_once("./controller/ControllerUser.php");
		$Registrar= new ControllerUser();
		$Registrar->registrarse();

	}

	
else 
	if(!array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();	
	}
else
	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='claim_spesific')&&(isset($_SESSION['sesionUsuario'])))
	{
		if (!isset($_SESSION['view_reclaim_espesific']))
		{
				include_once("./controller/controller_reclamos.php");
			 	$claims= new Controller_reclamos();
				$claims->ver_reclamo_espesifico_by_email();
		}else
			{
			include_once("./controller/ControllerUser.php");
			$home= new ControllerUser();
			$home->Home();
			}

	}
else
	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='claim_spesific')&&(!isset($_SESSION['sesionUsuario'])))
	{

		//$c = explode("&", $_REQUEST['claim_spesific']);
		//$claimto_view=$c[1];
		include_once("./controller/IndexController.php");
	 	$claims= new controlador_index();
		$claims->error_claims_mail();
	}
else 
 	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='home')&&(isset($_SESSION['sesionUsuario'])))
	{
			include_once("./controller/ControllerUser.php");
			$home= new ControllerUser();
			$home->Home();
	}	
			/*Visualiza error si se intenta ingresar a la aplicacion via url sin loguearse primero */
else 							
 	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='home')&&(!isset($_SESSION['sesionUsuario'])))
	{
				Include_once("./controller/ControllerUser.php");
				$error_no_puede_ingresar= new ControllerUser();
				$error_no_puede_ingresar->error404();
	}	


else 
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='cerrar_sesion')
	{
		session_destroy();
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();
	}	
else 
	if(( array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='ver_o_modificar')&&(isset($_SESSION['sesionUsuario'])))
		{			
				Include_once("./controller/controller_reclamos.php");
				$ver_modificar_reclamo= new Controller_reclamos();
				$ver_modificar_reclamo->ver_reclamo_espesifico();
		}

		/*Visualiza error si se intenta ingresar a la aplicacion via url sin loguearse primero */
else 
	if((array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='ver_o_modificar')&&(!isset($_SESSION['sesionUsuario'])))
		{			
				Include_once("./controller/ControllerUser.php");
				$error_no_puede_ingresar= new ControllerUser();
				$error_no_puede_ingresar->error404();
		}
else 
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='reclamoNuevo')
		{
		Include_once("./controller/controller_reclamos.php");
		$reclamo= new Controller_reclamos();
		$reclamo->crear_reclamo();

		}
else 
	if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='actualizar_paneles')
	{
		include "./controller/controller_reclamos.php";
	 	$home_Panel_reclamos= new Controller_reclamos();
	 	$home_Panel_reclamos->Panel_reclamos();
		
	}

?>
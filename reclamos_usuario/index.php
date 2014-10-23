<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);


/********************RUTEADOR DE REQUERIMIENTOS*********************************/


if (isset($_POST['pass_login'])){
			include_once("./controller/ControllerUser.php");
			$email= $_POST['email_login'];
			$pass=  $_POST['pass_login'];
			$l= new ControllerUser();
			$usuario=$l->comprobar_existencia_usuario($email,$pass);

			if ($usuario)
				{ 
					$_SESSION['sesionUsuario'] =$usuario;
					$l->login($usuario);
				}else
				     { $l->error404();}

			}	



else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index.tpl')
	{
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();	
	}

else 	if (isset($_POST['nombre_registrarse']))
	{
		include_once("./controller/ControllerUser.php");
		
		$arr_registro=array();
		$arr_registro['nombre']			= $_POST['nombre_registrarse'];
		$arr_registro['apellido']		= $_POST['apellido_registrarse'];
		$arr_registro['dni']			= $_POST['dni_registrarse'];
		$arr_registro['FechaNacimiento']= $_POST['FechaNacimiento'];
		$arr_registro['email']			= $_POST['email_registrarse'];
		$arr_registro['Celular']		= $_POST['Celular_registrarse'];
		$arr_registro['Telefono_fijo']	= $_POST['Telefono_fijo_registrarse'];
		$arr_registro['pass']			= $_POST['pass_registrarse'];
		$arr_registro['direccion']		= $_POST['Direccion_registrarse'];

		$R= new ControllerUser();
		$R->registrarse($arr_registro);

	}


else 	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='cerrar_sesion.tpl')
	{
		session_destroy();
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();
	}	


else 	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='home.tpl')
	{
			$id_usuario=$_SESSION['sesionUsuario'];
			$reclmo->Home($id_usuario);
	}

	else 	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='ver_o_modificar.tpl')
		{			
				Include_once("./controller/ControllerUser.php");
				$ver_modificar_reclamo= new ControllerUser();
				$id_usuario=$_SESSION['sesionUsuario'];
				print_r($id_usuario);
				$ver_modificar_reclamo->ver_reclamo_espesifico($id_usuario);
		}	

else 	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='reclamoNuevo')
		{
		Include_once("./controller/ControllerUser.php");
		$reclamo= new ControllerUser();
		$reclamo->crear_reclamo($_POST['reclamo_texto'],$_POST['reclamo_selector'],$_FILES['reclamo_foto']);

		}


?>
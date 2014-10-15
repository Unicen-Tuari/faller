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
if 	(isset($_POST['email_login']))
	{
			include_once("./controller/ControllerUser.php");
			$email= $_POST['email_login'];
			$pass=  $_POST['pass_login'];
			$l= new ControllerUser();
			$usuario=$l->comprobar_existencia_usuario($email,$pass);
			if ($usuario)
				{ 
					$_SESSION['sesionUsuario'] =$usuario;
					$id_usuario=$_SESSION['sesionUsuario'];
					$l->login($id_usuario);
				}else
				     { $l->error404();}
	}
else
	if (isset($_POST['nombre_registrarse']))
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

else
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='cerrar_sesion.tpl')
	{
		session_destroy();
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();
	}	


	/*if (isset($_POST['nombre_registrarse']))
	{
		include_once("./controller/ControllerUser.php");
		
		$arr_registro=array();FechaNacimiento
		$arr_registro['nombre']		= $_POST['nombre_registrarse'];
		$arr_registro['apellido']	= $_POST['apellido_registrarse'];
		$arr_registro['dni']		= $_POST['dni_registrarse'];
		$arr_registro['email']		= $_POST['email_registrarse'];
		$arr_registro['mujer']		= $_POST['mujer_registrarse'];
		$arr_registro['hombre']		= $_POST['hombre_registrarse'];
		$arr_registro['pass']		= $_POST['pass_registrarse'];
		$arr_registro['direccion']	= $_POST['Direccion_registrarse'];

		$R= new ControllerUser();
		$R->registrarse($datos_registro);

	}
	*/
//	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='reclamoNuevo')
	//{
else  //	if(($_POST['reclamo_texto']!=null)and($_POST['reclamo_selector']!='0'))
	 	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='reclamoNuevo.tpl')
		{
			unset($arr_datos_reclamo);
				Include_once("./controller/ControllerUser.php");
				$reclamo= new ControllerUser();
				$id_usuario=$_SESSION['sesionUsuario'];
				//print_r($id_usuario[0]["id_persona"]);
				if(isset($_POST["reclamo_foto"]))
				{
					$arr_datos_reclamo["reclamo_foto"]=$_POST["reclamo_foto"];
				}else
					{
						$arr_datos_reclamo["reclamo_foto"]="no ingreso foto del reclamo";
					}


				$arr_datos_reclamo["reclamo_texto"] 		=$_POST["reclamo_texto"];
				$arr_datos_reclamo["reclamo_selector"] 		=$_POST["reclamo_selector"];
				$arr_datos_reclamo["reclamo_id"] 			=$id_usuario[0]['id_persona'];

				//print_r($arr_datos_reclamo["reclamo_id"]);
				$reclamo->crear_reclamo($arr_datos_reclamo);
				$reclamo->Home($id_usuario);



		}
else 	
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='ver_o_modificar.tpl')
		{			
				Include_once("./controller/ControllerUser.php");
				$ver_modificar_reclamo= new ControllerUser();
				$id_usuario=$_SESSION['sesionUsuario'];
				$ver_modificar_reclamo->ver_reclamo_espesifico($id_usuario[0);
		}		

else

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index.tpl')
	{
		include "./controller/IndexController.php";
	 	$inicio= new controlador_index();
		$inicio->visualizar_inicio();	
	}
else
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='home.tpl')
	{
			$id_usuario=$_SESSION['sesionUsuario'];
			$reclmo->Home($id_usuario);
	}

	/*elseif($_REQUEST['action']=='Home')
	{
		include "./controller/ControllerUser.php";
		$c = new ControllerUser();
		$c->Home();
	
   }
*/
   	//if(array_key_exists('email_login',$_POST))
	/*elseif(array_key_exists('registrarse',$_POST))
	{	
		if(isset($_POST['registrarse']))
		{
			$cont_ini->encaminar_requerimientos($requerimiento);
		}
	}
	*/
		/*if($_POST["crear_reclamo_texto"])
	{
			include("./controller/controller_reclamos.php");
			$r= new reclamos();
			$r->crear_reclamo($_POST);
   }

*/
?>
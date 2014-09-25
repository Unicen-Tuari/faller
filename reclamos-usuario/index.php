<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include('./Controller/controlador_reclamos_usuarios.php');

 /* array_key_exists('acction', $a)  
  isset($a[action])
  $a(acction)==='index.php';
*/
 	$inicio=new controlador_inicio();
	$inicio->visualizar_inicio();
	if($inicio===null)
	{
  		echo "no se pudo visualizar_inicio";
	}

	if(array_key_exists('user_login',$_POST))
	{
		if(isset($_POST['user_login']))
		{
			$cont_ini->login;
		}
	}
	elseif(array_key_exists('registrarse',$_POST))
	{	
		if(isset($_POST['registrarse']))
		{
			$cont_ini->encaminar_requerimientos($requerimiento);
		}
	}

	elseif(array_key_exists('crear_reclamo_texto',$_POST))
	{
		if(isset($_POST['crear_reclamo_texto']))
		{
			$cont_ini->encaminar_requerimientos($requerimiento);
		}	
   }

?>
<?php

include("./index_model/ModeloBD.php");//DENTRO DE UN CONSTRUCTOR
include("./index_view/index_view.php");

if(isset($_POST['user_login']))
{
	$requerimiento='login';
	$controlador_usuario->encaminar_requerimientos($requerimiento);

}
if(isset($_POST['registrarse']))
{
	$requerimiento='registrarse';
	$controlador_usuario->encaminar_requerimientos($requerimiento);

}

if(isset($_POST['crear_reclamo_texto']))
{
	$requerimiento='crear_reclamo';
	$controlador_usuario->encaminar_requerimientos($requerimiento);
}



	class controlador_usuario
	{

		public function encaminar_requerimientos($requerimiento)
		{

			   /*****Visualiza pagina de inicio******/
			   if($requerimiento==='inicio_pagina_usuario')
			   {
			   		$this->visualizar_inicio();
			   }

		       /*****acciones posibles en la pagina de inicio******/

			    	if($requerimiento==='login')
			    	{
			    		$Persona->comprovar__existencia_usuario($_POST['user_login'],$_POST['pass_login']);
			    		$Persona->visualizar_home_usuario();
			    	}
			    	if($requerimiento==='registrarse')
			    		{

		    		     }
		        /*****acciones posibles una vez logueado******/
					if($requerimiento==='crear_reclamo')
					{
						$arr_nuevo_reclamo=$_POST['crear_reclamo_texto'];
						$arr_nuevo_reclamo=$_POST['area'];

						$Persona->crear_reclamo($arr_nuevo_reclamo);
					}


			}
		}
		public function comprovar__existencia_usuario()
       {
       } 
       
		public function visualizar_inicio()
		{
			$this->view_usuario->pagina_inicio();
			//visualizar_datos_usuario();
		}

		public function visualizar_home_usuario()
		{
			$this->view->home();
			$persona->visualizar_datos_usuario();
		}


	}


    


	class Persona //extends controlador_usuario
	{
		/***Atributos****/
		private 		$nombre;
		private 		$edad;
		private 		$dni;
		private 		$direccion;
		private 		$email;
		private 		$reclamo;

		/***Metodos****/

			public function __construct()
			{
				$per=New Persona;
			}

			public function visualizar_datos_usuario()
			{
	
			}

			public function ver_reclamos_de_usuario()
			{

			}

			public function crear_reclamo($Reclamo_ingresado)
					{
						$this->Consulta_base->conectar();//conexion 
						$this->Consulta_base->agregar_reclamo($Reclamo_ingresado);
						$this->Consulta_base->mostrar_reclamos();
					}
/*		
		public function crear_usuario()
		{

		}
		public function modificar_datos()
		{

	*/	}
	


?>
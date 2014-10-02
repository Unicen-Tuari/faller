<?php

include_once("./index_model/ModeloBD.php");//DENTRO DE UN CONSTRUCTOR
include_once("./index_view/index_view.php");


	/*****controlador principal*****/

	class controlador_inicio
	{

		       /*****acciones posibles en la pagina de inicio******/
		    	public function visualizar_inicio()
					{
						$view_usuario->home();
						//visualizar_datos_usuario();
					}

			    public function login()
			   {
			    		$Persona->comprovar__existencia_usuario($_POST['user_login'],$_POST['pass_login']);
			    		$Persona->visualizar_home_usuario();
			    }
			    	
			   public function registrarse()
			   {

			   }
			   public function comprovar__existencia_usuario()
		       {
		       }
	}


		      
	class reclamos()
			{
				public function crear_reclamo($Reclamo_ingresado)
				{
						$this->Consulta_base->conectar();//conexion 
						$this->Consulta_base->agregar_reclamo($Reclamo_ingresado);
						$this->Consulta_base->mostrar_reclamos();
				}
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
		protected 		$nombre;
		protected 		$edad;
		protected 		$dni;
		protected 		$direccion;
		protected 		$email;
		protected 		$reclamo;

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


/*		
		public function crear_usuario()
		{

		}
		public function modificar_datos()
		{

	*/	}
	


?>
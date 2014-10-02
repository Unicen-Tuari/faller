<?php

error_reporting(E_ALL);
ini_set("display_errors",1);


include_once("./Model/ver_reclamos.php");//DENTRO DE UN CONSTRUCTOR
include_once("./View/home_view.php");
//include("./Model/ver_reclamos.php");

	/*****controlador principal*****/

	class controlador_inicio
	{
			/*******Atributos***********/

			private $model;
			private $view_home;//inicio secion


			/*******Constructor Clase***********/
			function __construct()
			{
				$this->model 	= new m_ver_reclamos();
				$this->view_home = new home_view();
			}

	       /*****acciones posibles en la pagina de inicio******/
		    	public function visualizar_inicio()
					{
						$this->view_home->home();
						//visualizar_datos_usuario();
					}

			    public function login()
			   {
			    	
			    }
			    	
			   public function registrarse()
			   {

			   }
			   public function comprovar__existencia_usuario()
		       {
		       }
	}


		      
	class reclamos
		{
			/*******Atributos***********/
			private $model;


			/*******Constructor Clase***********/
			function __construct()
			{  
				$this->model= new model_crear_reclamo();
			}

			/*****acciones posibles para tratar con un reclamo******/

			public function crear_reclamo($Reclamo_ingresado)
				{
					$this->model->agregar_reclamo($Reclamo_ingresado);
				}

	 		public function mostrar_reclamos()
				{
					$this->conectar();
				}

			public function reclamos_solucionados()
			{

			}
			public function reclamos_pendientes()
			{

			}


		}      

		class C_ver_reclamos
		{
			private $model;
			private $vista;

			function __construct()
			{
				$this->vista= new home_view();
				$this->model= new m_ver_reclamos();
			}

			public function ver_reclmos()
			{
				$this->model->ver_reclamo();
			}
		}  
		      


?>
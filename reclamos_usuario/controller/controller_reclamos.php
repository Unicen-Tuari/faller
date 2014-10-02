<?php


	      
	class reclamos 
		{
			/*******Atributos***********/

	     private $model_crear_reclamo;
         private $model_ver_reclamos;
         private $vista_home;
         private $vista_consulta;
         private $usuario;

	    public function __construct()
         {
         	//include("./Model/model_reclamos.php");
         	include_once("./View/Home_view.php");
         	include_once("./Model/model_reclamos.php");
         	

         	//$this->model_agregar_reclamo= new model_crear_reclamo();
         	$this->vista_home=new view_Home();
         	$this->model_ver_reclamos= new model_ver_reclamos();
         	$this->vista_consulta=null;
         }
			/*******Constructor Clase***********/

			/*****acciones posibles para tratar con un reclamo******/

			
			public function crear_reclamo($Reclamo_ingresado)
				{
					$this->model_crear_reclamo->crear_reclamo($Reclamo_ingresado);
				}
			

			public function mostrar_reclmos($usuario)
			{
				return $this->model_ver_reclamos->ver_reclamo_M($usuario);

			}
			public function reclamos_solucionados()
			{

			}
			public function reclamos_pendientes()
			{

			}


		}      
    




?>
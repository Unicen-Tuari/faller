<?php


	      
	class Controller_reclamos 
		{
			/*******Atributos***********/

		     private $model_crear_reclamo;
		     private $model_ver_reclamos;
		     private $vista_home;
		     private $vista_consulta;
		     private $usuario;

	    public function __construct()
         {
         	/*************Archivos incluidos***********************/
         	//include("./Model/model_reclamos.php");
         	include_once("./View/Home_view.php");
         	include_once("./Model/model_reclamos.php");


         	//$this->model_agregar_reclamo= new model_crear_reclamo();
         	$this->vista_home 			=	new View_Home();
         	$this->model_ver_reclamos	=	new model_ver_reclamos();
         	$this->vista_consulta		=	null;
         }
			/*******Constructor Clase***********/


			/*******Metodos***********************************/		    	

			public function crear_reclamo($Reclamo_ingresado)
				{
					$this->model_crear_reclamo->crear_reclamo($Reclamo_ingresado);
				}
			

			public function mostrar_reclamos($usuario)
			{
				return $this->model_ver_reclamos->ver_reclamo($usuario);

			}
			public function reclamos_solucionados()
			{

			}
			public function reclamos_pendientes()
			{

			}


		}      
    




?>
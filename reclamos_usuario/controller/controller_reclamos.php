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
				$arr_datos_reclamos=array();
				$datos_reclamos=$datos_del_reclamo		=$this->model_ver_reclamos->ver_reclamo($usuario);
				//$arr_datos_reclamos['datos'][]		=$datos_del_reclamo		=$this	->model_ver_reclamos	->ver_reclamo($usuario);
				/*$arr_datos_reclamos['finalizados'][]	=$reclamos_finalizados	=$this	->model_ver_reclamos	->reclamo_finalizados($usuario);
				$arr_datos_reclamos['pendientes'][]	=$reclamos_pendientes	=$this	->model_ver_reclamos	->reclamo_pendientes($usuario);

				if(!$arr_datos_reclamos['finalizados'])
						{
							$arr_datos_reclamos['finalizados']=0;
						}
				if(!$arr_datos_reclamos['pendientes'])
						{
							$arr_datos_reclamos['pendientes']=0;
						}
				*/
				return $datos_reclamos;
			}
			public function reclamos_solucionados()
			{

			}
			public function reclamos_pendientes()
			{

			}


		}      
    




?>
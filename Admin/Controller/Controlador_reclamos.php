<?php

class controllerReclamos
{
	/**********ATRIBUTOS******************/
	private $vista
	private $model
	private $controlador

	/************Constructor************************/
	function __construct()
	{
		include_once("./Model/Model_reclamos.php");
		include_once("");
		include_once("");
		include_once("");
		
			 $this->vista				= new ();	
			 $this->model_ver_reclamos  = new model_ver_reclamos();
			 $this->controlador			= new ();

	}

	/**************FUNCIONES******************************/

	public function ver_reclamos()
				{

				}
	public function Filtrar_reclamo($filtro)
				{
					$this->model_ver_reclamos->filtro_reclamo($filtro);
				}			

	public function cambiar_area()
				{

				}


				
}



?>
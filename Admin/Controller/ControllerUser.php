<?php


class controllerUser
{
	/**********ATRIBUTOS******************/
	private $vista_home;
	private $vista_reclamos;
	private $model_ver_reclamos;
	private $controlador;

	/************Constructor************************/
	function __construct()
	{
		include_once("./View/View_home_admin.php");
		include_once("./View/Vista_reclamos_sector.php");
		include_once("./Model/Model_reclamos.php");
	/*	include_once("");
	*/
			 $this->vista_home			= new View_Home_Admin();
			 $this->vista_reclamos		= new View_Reclamos_Sector();
			 $this->model_ver_reclamos  = new model_ver_reclamos();
			//$model			= new ();
			 //$controlador	= new ();

	}

	/**************FUNCIONES******************************/

	public function Home()
				{

					$this->vista_home->Home();
				}

	public function registrar()
				{

				}

	public function login()
				{

				}

	public function ver_reclamos($area)
				{
					$Query_reclamos_area= $this->model_ver_reclamos->ver_reclamo_sector($area);
					//print_r($Query_reclamos_area);
					$this->vista_reclamos->reclamos($Query_reclamos_area);
				}

	public function cambiar_area()
				{

				
}


}


?>
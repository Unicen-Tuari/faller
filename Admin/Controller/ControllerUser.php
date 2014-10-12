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
		include_once("./Model/Model_comprobar_existencia_de_usuario.php");

			 $this->vista_home			= new View_Home_Admin();
			 $this->vista_reclamos		= new View_Reclamos_Sector();
			 $this->model_ver_reclamos  = new model_ver_reclamos();
			 $this->comprobar_usuario 	= new Model_comprobar_existencia_usuario();
			//$model			= new ();
			 //$controlador	= new ();

	}

	/**************FUNCIONES******************************/

		public function comprobar_existencia_usuario($sector,$nombre,$pass)
			{

				return $this->model_comprobar_existencia_usuario->verificar_usuario($sector,$nombre,$pass);
			}
						//le estoy pasando el id por referencia
	public function Home($datos_home)
				{
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($datos_home);
				$this->vista_home->Home();
				}

	public function registrar()
				{

				}


	public function error404()
			{
				//https://es.wikipedia.org/wiki/Error_404
				include_once("./View/View_error404.php");
				$error= new error_404();
				$error->pagina_error();
			}


	public function login()
			{

  			$sector=$_POST['sector_login'];
			$nombre= $_POST['Nombre_login'];
			$pass=  $_POST['pass_login'];

			$login_ok= $this->comprobar_existencia_usuario($sector,$nombre,$pass);
			
			if ($login_ok)
				{ 
					$id_usuario=$login_ok;
					$_SESSION['id'] 	=$id_usuario;
					$_SESSION['nombre'] 	=$nombre;
					$_SESSION['Sector'] 	=$sector;
					Home($id_usuario);
				}else
				     {
				      $login->error404();
				  }

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
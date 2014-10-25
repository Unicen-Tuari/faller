<?php


class controllerUser
{
	/**********ATRIBUTOS******************/
	private $vista_home;
	private $vista_reclamos;
	private $vista_tabla_r;
	private $model_ver_reclamos;
	private $model_comprobar_existencia_usuario;
	private $controlador;
	private $usuario;

	/************Constructor************************/
	function __construct()
	{
		include_once("./View/View_home_admin.php");
		include_once("./View/Vista_reclamos_sector.php");
		include_once("./View/Vista_tabla_reclamos.php");

		include_once("./Model/Model_reclamos.php");
		include_once("./Model/Model_comprobar_existencia_de_usuario.php");

			 $this->vista_home			= new View_Home_Admin();
			 $this->vista_reclamos		= new View_Reclamos_Sector();
			 $this->vista_tabla_r 		= new View_tabla_reclamo();
			 $this->model_ver_reclamos  = new model_ver_reclamos();
			 $this->model_comprobar_existencia_usuario 	= new Model_comprobar_existencia_usuario();
			//$model			= new ();
			 //$controlador	= new ();

	}

	/**************FUNCIONES******************************/

		public function comprobar_existencia_usuario($sector,$nombre,$pass)
			{
				return $this->model_comprobar_existencia_usuario->verificar_usuario($sector,$nombre,$pass);
			}
						//le estoy pasando el id por referencia
	public function Home($id_usuario,$sector)
				{
				$reclamos_area=$this->obtener_reclamos($sector);//se le puede pasar el id del empleado				
				$usuario=$_SESSION['nombre'] ;
				$this->vista_home->Home($reclamos_area,$usuario);
				}

	public function registrar()
				{

				}


	/*public function error404()
			{
				//https://es.wikipedia.org/wiki/Error_404
				//include_once("./View/View_error404.php");
				$error= new error_404();
				$error->pagina_error();
			}
*/
	public function login()
			{

	  			$sector	=$_POST['sector_login'];
				$nombre	=$_POST['Nombre_login'];
				$pass	= $_POST['pass_login'];

				if(isset($nombre) AND isset($pass) AND isset($sector) AND ($sector!=0)) 
				{
					$login_ok= $this->comprobar_existencia_usuario($sector,$nombre,$pass);
					
						if ($login_ok)
						{ 
								$id_usuario=$login_ok;
								$_SESSION['id'] 		=$id_usuario;
								$_SESSION['nombre'] 	=$nombre;
								$_SESSION['Sector'] 	=$sector;

								$this->Home($id_usuario,$sector);
						}else
							{
								print_r("error");
							  //   $this->error404();
							}
				}
				

			}
	public function ver_reclamos()
			{
				$usuario=$_SESSION['nombre'];
				if ($_POST["fitro_reclamo"]==null)
				{
					$filtro=null;

				}else
				 {
				 	$filtro=$_POST["fitro_reclamo"];

				 }

				$reclamos= $this->obtener_reclamos($_SESSION['Sector'],$filtro);
			
				if($filtro==null) {
					$this->vista_reclamos->Reclamos($reclamos,$usuario);
				}else
					{
						$this->vista_tabla_r->tabla($reclamos,$usuario);
					}
				
			}	

	public function obtener_reclamos($sector,$filtro=0)
				{
					return $Query_reclamos_area= $this->model_ver_reclamos->ver_reclamo_sector($sector,$filtro);
				}

	public function cambiar_area()
				{

				
				}
	public function panel_informativo_reclamos()
				{

				}
   


}


?>
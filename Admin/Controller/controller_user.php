<?php


class controller_user
{
	/**********ATRIBUTOS******************/
	private $View_home;
	private $model_comprobar_existencia_usuario;

	/************Constructor************************/
	function __construct()
	{
		include_once("./View/View_home_admin.php");

		include_once("./Model/Model_comprobar_existencia_de_usuario.php");
		include_once("./Model/Model_sign_in.php");


		include_once("./Controller/Controller_claims.php");
		

		 $this->View_home							= new View_Home_Admin();
		 $this->model_comprobar_existencia_usuario 	= new Model_comprobar_existencia_usuario();
		 $this->Model_sign_in						= new Model_sign_in();

		 $this->Controller_claims					= new Controller_claims();
	}

	/**************FUNCIONES******************************/

	public function comprobar_existencia_usuario($sector,$nombre,$pass)
			{
				return $this->model_comprobar_existencia_usuario->verificar_usuario($sector,$nombre,$pass);
			}



						//le estoy pasando el id por referencia
	public function Home($id_usuario,$sector)
				{
				$reclamos_area=$this->Controller_claims->get_claims($sector);//se le puede pasar el id del empleado				
				$usuario=$_SESSION['nombre'] ;
				$this->View_home->Home($reclamos_area,$usuario);
				}

	public function Sign_in()
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
	
   


}


?>
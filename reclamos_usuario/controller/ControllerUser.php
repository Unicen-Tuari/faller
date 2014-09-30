<?php
		

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			
			//private $model_registrarse;
			private $model_login;
			private $view_home;
			private $model1;
			private $controller_reclamos;

	public function __construct()
			{
				include("./Model/Model_Registrarse.php");
				include("./Model/model_reclamos.php");
				include("./View/Home_view.php");
			  	include("./controller/controller_reclamos.php");

			  	$this->model_registrarse	= 	new Registrarse();
				$this->view_home 			= 	new view_Home();
				$this->model1				=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
				$this->controller_reclamos	= 	new reclamos();

			}

	private function comprovar_existencia_usuario()
			{
				 $this->model_login->verificar_usuario($email,$pass);
			}

	public function Home($datos_home)
			{
				$this->controller_reclamos->mostrar_reclmos($datos_home);
			}

	public function error504()
			{
				include("./View/View_error504.php");
				$error= new error_504();
				$error->pagina_error();
			}


	public function login($email,$pass)
			{ 

			include("./Model/Model_Login.php");	
			$model_login= 	new Login();
				
			$email=0;
			$pass=0;
	    	$login_ok = $this->model_login->verificar_usuario($email,$pass);
	    	if($login_ok!=null)
		    {
		    		$this->Home($login_ok);//le pasa los datos a la funcion home definida en este controlador
		   	}
		   	else
		   		{
					$this->error504();
		   		}

			}


	/*public function registrarse($nombre,$apellido,$email,$pass,$direccion,$ciudad,$edad,$sexo)
			{
				$registro_ok= $this->model_registrarse($nombre,$apellido,$email,$pass,$direccion,$ciudad,$edad,$sexo);
				if($registro_ok==null)
			    	{
			    		$this->Home($sin_reclamos=null);//le pasa los datos a la funcion home definida en este controlador
			   		}
			   		else
			   			{
							$this->error504();
			   			}


			}
			*/
}



?>
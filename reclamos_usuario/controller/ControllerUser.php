<?php
		

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			
			//private $model_registrarse;
			private $model_login;
			private $view_home;
			private $model;
			private $controller_reclamos;

	public function __construct()
			{
				include_once("./Model/Model_Registrarse.php");
				include_once("./Model/model_reclamos.php");
				include_once("./View/Home_view.php");
			  	include_once("./controller/controller_reclamos.php");
			  	include_once("./Model/Model_Login.php");	
	
				$this->model_login 				= 	new Login();
			  	$this->model_registrarse	= 	new Registrarse();
				$this->view_home 			= 	new view_Home();
				$this->model				=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
				$this->controller_reclamos	= 	new reclamos();

			}

	public function comprobar_existencia_usuario($email,$pass)
			{

				return $this->model_login->verificar_usuario($email,$pass);
			}
						//le estoy pasando el id por referencia
	public function Home($datos_home)//datos home es informacion de una consulta 
			{
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclmos($datos_home);
			    $this->view_home->Home_v($reclamos_usuario);

			}

	public function error504()
			{
				include_once("./View/View_error504.php");
				$error= new error_504();
				$error->pagina_error();
			}


	public function login($email,$pass)
			{ 
	    	$login_ok = $this->comprobar_existencia_usuario($email,$pass);
	    	if($login_ok)
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
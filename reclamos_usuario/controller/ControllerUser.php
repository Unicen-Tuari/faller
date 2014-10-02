<?php

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			

	/*******Atributos***********/

	private $model_registrarse;
	private $model_comprobar_existencia_usuario;
	private $view_home;
	private $model;
	private $controller_reclamos;


	/*******Metodos***********/

	public function __construct()
			{
	         	/*************Archivos incluidos***********************/

				include_once("./Model/Model_Registrarse.php");
				include_once("./Model/model_reclamos.php");
				include_once("./View/Home_view.php");
			  	include_once("./controller/controller_reclamos.php");
			  	include_once("./Model/Model_comprobar_existencia_de_usuario.php");	
		        
		        /*************Inicializo las variables con clases***********************/

				$this->model_comprobar_existencia_usuario= 	new Model_comprobar_existencia_usuario();
			  	$this->model_registrarse				= 	new Model_Registrarse();
				$this->view_home 						= 	new View_Home();
				$this->model							=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
				$this->controller_reclamos				= 	new Controller_reclamos();

			}

	public function comprobar_existencia_usuario($email,$pass)
			{

				return $this->model_comprobar_existencia_usuario->verificar_usuario($email,$pass);
			}
						//le estoy pasando el id por referencia
	private function Home($datos_home)//datos home es informacion de una consulta 
			{
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($datos_home);
			    $this->view_home->Home($reclamos_usuario);

			}

	public function error504()
			{
				include_once("./View/View_error504.php");
				$error= new error_504();
				$error->pagina_error();
			}


	public function login($usuario)
	{
			    	if($usuario)
				    { 
				    	$this->Home($usuario);//le pasa los datos a la funcion home definida en este controlador
				   	}
				   		else
					   		{
								$this->error504();//Method own of this class
					   		}


	}

	public function registrarse($arr_datos_registrarse)
			{
				$registro_ok= $this->model_registrarse($arr_datos_registrarse);
				if($registro_ok==null)
			    	{

			   		}
			   		else
			   			{
							$this->error504();
			   			}


			}
}



?>
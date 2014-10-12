<?php

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			

	/*******Atributos***********/

	private $model_registrarse;
	private $model_comprobar_existencia_usuario;
	private $view_home;
	private $view_registrado_exitoso;
	private $model;
	private $controller_reclamos;


	/*******Metodos***********/

	public function __construct()
			{
	         	/*************Archivos incluidos***********************/
	         	include_once("./View/view_registrado_exitoso.php");
				include_once("./Model/model_reclamos.php");
				include_once("./View/Home_view.php");
			  	include_once("./controller/controller_reclamos.php");
			  	include_once("./Model/Model_comprobar_existencia_de_usuario.php");	
		        
		        /*************Inicializo las variables con clases***********************/

				$this->model_comprobar_existencia_usuario= 	new Model_comprobar_existencia_usuario();
				$this->view_home 						= 	new View_Home();
				$this->view_registrado_exitoso			= 	new view_registrado_exitoso();
				$this->model_ver_reclamos				=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
				$this->model_crear_reclamo				=	new model_crear_reclamo();//esta llamada tiene que ser a un controller
				$this->controller_reclamos				= 	new Controller_reclamos();
				$this->model_registrarse				= 	new model_registrarse();
			}

	public function comprobar_existencia_usuario($email,$pass)
			{

				return $this->model_comprobar_existencia_usuario->verificar_usuario($email,$pass);
			}
						//le estoy pasando el id por referencia
	public function Home($datos_home)//datos home es informacion de una consulta 
			{
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($datos_home);
			    //$usuario=
			    $this->view_home->Home($reclamos_usuario);

			}

	public function error404()
			{
				//https://es.wikipedia.org/wiki/Error_404
				include_once("./View/View_error404.php");
				$error= new error_404();
				$error->pagina_error();
			}


	public function login($usuario)
			{
		    	if($usuario)
			    { 
			    	
			    	$this->Home($usuario);//le pasa los datos a la funcion home definida en este controlador
			   	}
			}


	public function registrarse($arr_datos_registrarse)
			{
				 $this->model_registrarse->registrar($arr_datos_registrarse);
				 $this->view_registrado_exitoso->r_exitoso();
			}

	public function crear_reclamo($arr_datos_reclamo)
			{
				//print_r($datos_reclamo);
				$this->model_crear_reclamo->crear_reclamo($arr_datos_reclamo);

			}
}



?>
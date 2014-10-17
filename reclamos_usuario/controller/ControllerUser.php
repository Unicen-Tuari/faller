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
	private $view_tabla_reclamos;
	private $ver_modificar ;
	private $model;
	private $model_ver_reclamos	;
	private $controller_reclamos;


	/*******Metodos***********/

	public function __construct()
			{
	         	/*************Archivos incluidos***********************/
	         	include_once("./View/view_registrado_exitoso.php");				
				include_once("./View/Home_view.php");
				include_once("./View/View_ver_modificar.php");
				include_once("./View/view_tabla_peticiones.php");

			  	include_once("./controller/controller_reclamos.php");

			  	include_once("./Model/model_reclamos.php");
			  	include_once("./Model/Model_comprobar_existencia_de_usuario.php");	
		        
		        /*************Inicializo las variables con clases***********************/

				$this->model_comprobar_existencia_usuario= 	new Model_comprobar_existencia_usuario();
				$this->view_home 						= 	new View_Home();
				$this->ver_modificar 					= 	new view_ver_modificar();
				$this->view_registrado_exitoso			= 	new view_registrado_exitoso();
				$this->view_tabla_reclamos				= 	new view_tabla_peticiones();

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

	public function crear_reclamo($datosReclamo)
			{

			$id=$_SESSION['sesionUsuario'];
			$Fot=$datosReclamo['valorF'];
			$Rec=$datosReclamo['valorR'];
			$Selec=$datosReclamo['valorS'];

			
				$this->model_crear_reclamo->crear_reclamo($Rec,$Fot,$Selec,$id);

				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($id);

				$this->view_tabla_peticiones->tabla_peticiones($reclamos_usuario);
			}


	public  function ver_reclamo_espesifico($id_usuario)
				{
					$id_reclamo=$_POST["id_reclamo"];
					$datos_reclamo= $this->model_ver_reclamos->reclamo_espesifico($id_usuario,$id_reclamo);
					//print_r($datos_reclamo);
					$r=$datos_reclamo[0]["reclamo"];
					$foto=$datos_reclamo[0]["foto_reclamo"];
					$this->ver_modificar->ver_modificar($r,$foto);
				}
}



?>
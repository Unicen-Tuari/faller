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
				include_once("./View/View_tabla_peticiones.php");


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

	public function comprobar_existencia_usuario($email,$contraseña)
			{

				return $this->model_comprobar_existencia_usuario->verificar_usuario($email,$contraseña);
			}
						//le estoy pasando el id por referencia
	public function Home($usuario)//datos home es informacion de una consulta 
			{
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($usuario);
				$r_p=$this->controller_reclamos->reclamos_pendientes($usuario);
				$r_f=$this->controller_reclamos->reclamo_finalizados($usuario);

			    $this->view_home->Home($reclamos_usuario,$r_p,$r_f);

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
				

				/*datos del form login*/
				$email= $_POST['email_login'];
				$contraseña=  $_POST['pass_login'];
				$usuario=$this->comprobar_existencia_usuario($email,$contraseña);/*choca los 2 capos contra la base*/
				
				if($usuario!="consulta_vacia")/*si el usuario y contraseña son correctas no devolveran el string consulta vacia*/
				{ 
					$_SESSION['sesionUsuario']=$usuario;
			    	$this->Home($_SESSION['sesionUsuario'] );//le pasa los datos a la funcion home definida en este controlador
			   	}/*else
				   { 
				   	include_once("./View/View_error_login.php");
				    $error=new View_error_login();
				    $error->error_login();
				   }*/
			}


	public function registrarse($arr_datos_registrarse)
			{
				$arr_registro=array();

				$arr_registro['nombre']			= $_POST['nombre_registrarse'];
				$arr_registro['apellido']		= $_POST['apellido_registrarse'];
				$arr_registro['dni']			= $_POST['dni_registrarse'];
				$arr_registro['FechaNacimiento']= $_POST['FechaNacimiento'];
				$arr_registro['email']			= $_POST['email_registrarse'];
				$arr_registro['Celular']		= $_POST['Celular_registrarse'];
				$arr_registro['Telefono_fijo']	= $_POST['Telefono_fijo_registrarse'];
				$arr_registro['pass']			= $_POST['pass_registrarse'];
				$arr_registro['direccion']		= $_POST['Direccion_registrarse'];
			
				 $this->model_registrarse->registrar($arr_datos_registrarse);
				 $this->view_registrado_exitoso->r_exitoso();
			}

	public function crear_reclamo()//creo el reclamo con Ajax
			{

				/*Datos ingresados para crear el reclamo*/
				$Rec=$_POST['reclamo_texto'];
				$Selec=$_POST['reclamo_selector'];
				$Fot=$_FILES['reclamo_foto'];
				$f=$Fot[name]; //selecciono el nombre para obtener el path de la imagen
				$id=$_SESSION['sesionUsuario'];
			
				/*Acciones con los datos para crear el reclamo*/

				$this->model_crear_reclamo->crear_reclamo($Rec,$Selec,$f,$id);//envia al modelo los datos para que los incruste en la base

				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($id);

				$this->view_tabla_reclamos->tabla_peticiones($reclamos_usuario);//actualiza la tabla de peticiones que esta en un tpl aparte
			}


	public  function ver_reclamo_espesifico()
				{
					$id_usuario=$_SESSION['sesionUsuario'];
					$id_reclamo=$_POST["id_reclamo"];
					$datos_reclamo= $this->model_ver_reclamos->reclamo_espesifico($id_usuario,$id_reclamo);
					//print_r($datos_reclamo);
					$r=$datos_reclamo[0]["reclamo"];
					$foto=$datos_reclamo[0]["foto_reclamo"];
					$this->ver_modificar->ver_modificar($r,$foto);
				}
}



?>
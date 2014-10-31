<?php

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			

	/*******Atributos***********/
private $model;
	private $model_registrarse;
	private $model_comprobar_existencia_usuario;
	private $model_ver_reclamos	;
	
	private $view_home;
	private $view_registrado_exitoso;
	private $view_tabla_reclamos;
	private $ver_modificar ;
	
	private $controller_reclamos;


	/*******Metodos***********/

	public function __construct()
			{
	         	/*************Archivos incluidos***********************/
	         	include_once("./View/view_registrado_exitoso.php");				
				include_once("./View/Home_view.php");
				include_once("./View/View_tabla_peticiones.php");


			  	include_once("./controller/controller_reclamos.php");

			  	include_once("./Model/model_reclamos.php");
			  	include_once("./Model/Model_comprobar_existencia_de_usuario.php");
			  	include_once("./Model/Modelo_registrarse.php");

			  	
		        
		        /*************Inicializo las variables con clases***********************/

				$this->model_comprobar_existencia_usuario= 	new Model_comprobar_existencia_usuario();
				$this->view_home 						= 	new View_Home();
				$this->view_registrado_exitoso			= 	new view_registrado_exitoso();
				$this->view_tabla_reclamos				= 	new view_tabla_peticiones();

				$this->model_ver_reclamos				=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
				$this->model_crear_reclamo				=	new model_crear_reclamo();//esta llamada tiene que ser a un controller
				$this->controller_reclamos				= 	new Controller_reclamos();
				$this->model_registrarse				= 	new model_registrarse();
			}

	public function comprobar_existencia_usuario($email)
			{

				return $this->model_comprobar_existencia_usuario->verificar_usuario($email);
			}
						//le estoy pasando el id por referencia
	public function Home()//datos home es informacion de una consulta 
			{
				$id_usuario=$_SESSION['sesionUsuario'];
				$email=$_SESSION['emailUsuario'];
				$reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($id_usuario);
				$r_p=$this->controller_reclamos->reclamos_pendientes($id_usuario);
				$r_f=$this->controller_reclamos->reclamo_finalizados($id_usuario);
			    $this->view_home->Home($reclamos_usuario,$r_p,$r_f,$email);

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
				

			function crypt_blowfish_bydinvaders($contraseña, $digito = 7)
				{
					$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
					$salt = sprintf('$2a$%02d$', $digito);
					for($i = 0; $i < 22; $i++)
						{
							$salt .= $set_salt[mt_rand(0, 22)];
						}
					return crypt($contraseña, $salt);
				}
								/*datos del form login*/
				
				$email= $_POST['email_login'];	 
				$contraseña=$_POST['pass_login'];
				$ar_datos_usuario=$this->comprobar_existencia_usuario($email);/*choca los 2 capos contra la base*/

				if( crypt($contraseña, $ar_datos_usuario['pass']) == $ar_datos_usuario['pass'])
					{

						$_SESSION['sesionUsuario']=$ar_datos_usuario['id'];
						$_SESSION['emailUsuario']=$_POST['email_login'];	
				    	$this->Home();//le pasa los datos a la funcion home definida en este controlador
					}
				else
				   { 
				   	include_once("./View/View_error_login.php");
				    $error=new View_error_login();
				    $error->error_login();
				   }
			}


	public function registrarse()
			{
				$arr_registro=array();

				function crypt_blowfish_bydinvaders($contraseña, $digito = 7)
				{
					$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
					$salt = sprintf('$2a$%02d$', $digito);
					for($i = 0; $i < 22; $i++)
						{
							$salt .= $set_salt[mt_rand(0, 22)];
						}
					return crypt($contraseña, $salt);
				}
				$comprobacion_de_su_existencia=$this->comprobar_existencia_usuario($_POST['email_registrarse']);
				if($comprobacion_de_su_existencia==='consulta_vacia')
				{
						$contraseña=crypt_blowfish_bydinvaders($_POST['pass_registrarse']);
							
							$arr_registro['nombre']			= $_POST['nombre_registrarse'];
							$arr_registro['apellido']		= $_POST['apellido_registrarse'];
							$arr_registro['dni']			= $_POST['dni_registrarse'];
							$arr_registro['FechaNacimiento']= $_POST['FechaNacimiento'];
							$arr_registro['email']			= $_POST['email_registrarse'];
							$arr_registro['Celular']		= $_POST['Celular_registrarse'];
							$arr_registro['Telefono_fijo']	= $_POST['Telefono_fijo_registrarse'];
							$arr_registro['pass']			= $contraseña;
							$arr_registro['direccion']		= $_POST['Direccion_registrarse'];
						
							 $this->model_registrarse->registrar($arr_registro);
							 $this->view_registrado_exitoso->r_exitoso();
					}


			}




}



?>
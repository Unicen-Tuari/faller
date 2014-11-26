<?php


class controller_user
{
	/**********ATRIBUTOS******************/
	private $View_home;
	private $View_register_susses;
	private $model_comprobar_existencia_usuario;

	/************Constructor************************/
	function __construct()
	{
		include_once("./View/View_home_admin.php");				
		include_once("./View/View_employers.php");	
		include_once("./View/View_register_susses.php");	


		include_once("./Model/Model_comprobar_existencia_de_usuario.php");
		include_once("./Model/Model_Modification_state.php");

		include_once("./Model/Model_sign_in.php");
		include_once("./Model/Model_view_employers.php");


		include_once("./Controller/Controller_claims.php");
		

		 $this->View_home							= new View_Home_Admin();
		 $this->View_employers 						= new View_employers();
		  $this->View_register_susses				=new  View_register_susses();
		 $this->model_comprobar_existencia_usuario 	= new Model_comprobar_existencia_usuario();
		 $this->Model_sign_in						= new Model_sign_in();
		 $this->Model_view_employers				= new Model_view_employers();
		 $this->Model_Modification_state			= new Model_Modification_state();
		 
		 $this->Controller_claims					= new Controller_claims();
	}

	/**************FUNCIONES******************************/

	public function comprobar_existencia_usuario($sector,$nombre,$pass)
			{
				return $this->model_comprobar_existencia_usuario->verificar_usuario($sector,$nombre,$pass);
			}



						//le estoy pasando el id por referencia
	public function Home()
				{
				$reclamos_area=$this->Controller_claims->get_claims($_SESSION['Sector']);//se le puede pasar el id del empleado				
				$usuario=$_SESSION['nombre'] ;
				$this->View_home->Home($reclamos_area,$usuario);
				}


	public function sign_in()
			{
				$arr_registro=array();

				$comprobacion_de_su_existencia=$this->comprobar_existencia_usuario($_POST['sector_registrarse'],$_POST['nombre_registrarse'],$_POST['pass_registrarse']);
				if($comprobacion_de_su_existencia==null)
				{
					
							$arr_registro['sector']			= $_POST['sector_registrarse'];
							$arr_registro['nombre']			= $_POST['nombre_registrarse'];
							$arr_registro['apellido']		= $_POST['apellido_registrarse'];
							$arr_registro['dni']			= $_POST['dni_registrarse'];
							$arr_registro['email']			= $_POST['email_registrarse'];
							$arr_registro['puesto']			= $_POST['puesto_registrarse'];
							$arr_registro['pass']			= $_POST['pass_registrarse'];


							 $this->Model_sign_in->registrar($arr_registro);
							 $this->View_register_susses->r_susses();
					}else
					   { 
						   //	include_once("./View/View_error_login.php");
						   // $error=new View_error_login();
						    //$mail_existente="El email ya fue usado para otra cuenta, ingrese otro o precione el  boton ingresar";
						    //$error->error_login($mail_existente);
					   }


			}


	public function employers()
			{
				$sector=$_SESSION['Sector'];
				$all_employers=$this->Model_view_employers->view_employers($sector);
				if($_SESSION['jefe']!=0)
				{
 				$this->View_employers->employers($all_employers);	
				}else
				 	{
				 		$this->View_employers->not_admin($all_employers);
				 	}
			}

	public function employers_managment()
			{
				$employ=$_POST["id_empleado"];
				$sector	=$_SESSION['Sector'];
				$state=$_POST["state"];

				if($state==="Activo")
				{
					$state="Desactivado";
				}else
					{
						$state="Activo";
					}
				$this->Model_Modification_state->state($employ,$sector,$state);
				$all_employers=$this->Model_view_employers->view_employers($sector);
				$this->View_employers->employers($all_employers);
 				//$this->View_employers->update_table_employers($all_employers);	


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


				$user_exists=false;
				$user_Desactivado=false;
				if(isset($nombre) AND isset($pass) AND isset($sector) AND ($sector!=0)) 
				{
					$login_ok= $this->comprobar_existencia_usuario($sector,$nombre,$pass);
					
						if (($login_ok)&&($login_ok[0]['activo']=='Activo'))
						{ 
								$id_usuario=$login_ok;
								$_SESSION['id'] 		=$id_usuario[0]['id_empleado'];
								$_SESSION['nombre'] 	=$nombre;
								$_SESSION['Sector'] 	=$sector;
								$_SESSION['jefe']		=$id_usuario[0]['jefe_s'];

								//$this->Home();
								$user_exists=true;
						}
						else
							if (($login_ok)&&($login_ok[0]['activo']=='Desactivado'))
								{

									$user_Desactivado=true;
								}
							
					}



				    echo json_encode(
				    	array(
				    		'user_exists'=>$user_exists,
				    		'user_Desactivado'=>$user_Desactivado,
				    	)
				   	);

				   	exit();

				}
				

			}
	
  

?>
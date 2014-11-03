<?php


	      
	class Controller_reclamos 
		{
			/*******Atributos***********/

		     private $model_crear_reclamo;
		     private $model_ver_reclamos;
		     private $Model_get_answer_claims_setors;


		     private $ver_modificar;
			 private $view_tabla_reclamos;
		     private $vista_home;
		     private $Vista_panel_reclamos;

	    public function __construct()
         {
         	/*************Archivos incluidos***********************/
         	//include("./Model/model_reclamos.php");
         	include_once("./View/Home_view.php");
         	include_once("./View/Vista_panel_reclamos.php");
			include_once("./View/View_tabla_peticiones.php");
			include_once("./View/View_ver_modificar.php");

		include_once("./Model/Model_get_answer_claims_setors.php");
         	include_once("./Model/model_reclamos.php");
			
			$this->ver_modificar 		= 	new view_ver_modificar();
			$this->view_tabla_reclamos	= 	new view_tabla_peticiones();
         	$this->vista_home 			=	new View_Home();
         	$this->Vista_panel_reclamos = 	new Vista_panel_reclamos();
		
			$this->Model_get_answer_claims_setors= new Model_get_answer_claims_setors();
         	$this->model_crear_reclamo= new model_crear_reclamo();
         	$this->model_ver_reclamos	=	new model_ver_reclamos();
         	
         }
			/*******Constructor Clase***********/


			/*******Metodos***********************************/		    	

		public function crear_reclamo()//creo el reclamo con Ajax
			{

				/*Datos ingresados para crear el reclamo*/
				$id=$_SESSION['sesionUsuario'];
				$Rec=$_POST['reclamo_texto'];
				$Selec=$_POST['reclamo_selector'];
				$Fot=$_FILES['reclamo_foto'];
				if(isset($Fot['name']))//selecciono el nombre para obtener el path de la imagen
					{ 
						$f=$Fot['name'];
					}else
					{
						$f="no ingreso imagen";
					}
				
			
				/*Acciones con los datos para crear el reclamo*/

				$this->model_crear_reclamo->crear_reclamo($Rec,$Selec,$f,$id);//envia al modelo los datos para que los incruste en la base

				$reclamos_usuario=$this->mostrar_reclamos($id);

				$this->view_tabla_reclamos->tabla_peticiones($reclamos_usuario);//actualiza la tabla de peticiones que esta en un tpl aparte
			}

			public function mostrar_reclamos($usuario)
			{
				$arr_datos_reclamos=array();
				$datos_reclamos=$this->model_ver_reclamos->ver_reclamo($usuario);
				return $datos_reclamos;
			}


	public function get_respond_claims_setors($id_claim)
			{
					return $this->Model_get_answer_claims_setors->get_answer_setors($id_claim);
			}		

	public  function ver_reclamo_espesifico()
				{
					$id_usuario=$_SESSION['sesionUsuario'];
					$id_reclamo=$_POST["id_reclamo"];
					$datos_reclamo= $this->model_ver_reclamos->reclamo_espesifico($id_usuario,$id_reclamo);
					//print_r($datos_reclamo);
					$r=$datos_reclamo[0]["reclamo"];
					$foto=$datos_reclamo[0]["foto_reclamo"];
					$answer_sectores=$this->get_respond_claims_setors($id_reclamo);
					$this->ver_modificar->ver_modificar($r,$foto,$answer_sectores);
				}
 

	public function reclamo_espesifico($usuario,$id_reclamo)
			{
				return $datos_reclamos=$this->model_ver_reclamos->reclamo_espesifico($usuario,$id_reclamo);
			}


	public function reclamo_finalizados($id_usuario)
			{
				
				return $this->model_ver_reclamos->reclamo_pendientes($id_usuario);
			}
	public function reclamos_pendientes($id_usuario)
			{
				return $this->model_ver_reclamos->reclamo_pendientes($id_usuario);

			}

	public function reclamos_en_tramite()
			{

			}

	public 	function Panel_reclamos()
		 	{
		 		$arr_panel=array();
		 		$id_usuario=$_SESSION['sesionUsuario'];
		 		$arr_panel['finalizados']=$this->reclamo_finalizados($id_usuario);
		 		$arr_panel['pendientes']=$this->reclamos_pendientes($id_usuario);
		 		$this->Vista_panel_reclamos->visualizar_datos_panel($arr_panel);

		 	}			


		}      


    




?>
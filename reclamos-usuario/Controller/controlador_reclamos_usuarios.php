<?php

include("./Model/ModeloBD.php");//DENTRO DE UN CONSTRUCTOR
include("./View/index_view.php");


	/*****controlador principal*****/

	class controlador_inicio
	{

		       /*****acciones posibles en la pagina de inicio******/
		    	public function visualizar_inicio()
					{
						$contr_vista=new view_usuario();
						$contr_vista->home();
						//visualizar_datos_usuario();
					}

			    public function login()
			   {
			    		$Persona->comprovar__existencia_usuario($_POST['user_login'],$_POST['pass_login']);
			    		$Persona->visualizar_home_usuario();
			    }
			    	
			   public function registrarse()
			   {

			   }
			   public function comprovar__existencia_usuario()
		       {
		       }
	}


		      
	class reclamos
			{
				public function crear_reclamo($Reclamo_ingresado)
				{
						$this->Consulta_base->conectar();//conexion 
						$this->Consulta_base->agregar_reclamo($Reclamo_ingresado);
						$this->Consulta_base->mostrar_reclamos();
				}
			}        
		      


?>
<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

	class controlador_index
	{
			/*******Atributos***********/

			private $view_inicio;
			private $Error_mail;

			/*******Constructor Clase***********/
			function __construct()
			{
			 	/********Archivos incluidos***********************/
				include_once("./View/View_index.php");
				include_once("./View/View_error_mail.php");

		        /*******Inicializo las variables con clases*******/
				$this->view_inicio = new View_index();
				$this->view_error_mail = new error_claim_email();
			}


			/*******Metodos***********/		    	

    	public function visualizar_inicio()
		{
				$this->view_inicio->visualizar_idex();
		}
		public function error_claims_mail()
				{
				$id_reclaimer=$_GET["reclaimer"];
					$id_reclamo=$_GET["claims_by_email"];
					/*	print_r($_GET);
					die("controller index");
					*/
					$this->view_error_mail->pagina_error($id_reclamo,$id_reclaimer);
				
				}



	}



?>
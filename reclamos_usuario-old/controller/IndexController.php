<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

	class controlador_index
	{
			/*******Atributos***********/

			private $view_inicio;

			/*******Constructor Clase***********/
			function __construct()
			{
			 	/********Archivos incluidos***********************/
				include_once("./View/View_index.php");

		        /*******Inicializo las variables con clases*******/
				$this->view_inicio = new View_index();
			}


			/*******Metodos***********/		    	

    	public function visualizar_inicio()
		{
				$this->view_inicio->visualizar_idex();
		}




	}



?>
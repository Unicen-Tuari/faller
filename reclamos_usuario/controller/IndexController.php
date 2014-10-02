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
				include_once("./View/View_index.php");
				$this->view_inicio = new View_index();
			}

	       /*****acciones posibles en la pagina de inicio******/
		    	

    	public function visualizar_inicio()
		{
				$this->view_inicio->visualizar_idex();
		}




	}



?>
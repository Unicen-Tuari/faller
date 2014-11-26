<?php


class Controller_reclaimer
{
	/**********ATRIBUTOS******************/
	private $Model_reclaimer_data;

	/************Constructor************************/
	function __construct()
	{

		include_once("./Model/Model_reclaimer_data.php");
		
		 $this->Model_reclaimer_data 	= new Model_reclaimer_data();

	}

	/**************FUNCIONES******************************/

	public function reclaimer_data($id_reclaimer)
		   	{
		   		return $this->Model_reclaimer_data->reclaimer_data($id_reclaimer);

		   	}			


}


?>
<?php

include_once( "modelodb.php");

Class Model_reclaimer_data extends modelodb
{

	/*******Metodos***********************************/		    	

	public function reclaimer_data($id_reclaimer)
	{

		return $this->query("SELECT *
							 FROM USUARIO
							 WHERE id_persona='$id_reclaimer' 
							");	//campo selec indicar las filas que necesito la del mail y del pss		
	}

}

?>
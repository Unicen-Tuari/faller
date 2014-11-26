<?php

include_once( "modelodb.php");

Class Model_date_person_espesific extends modelodb
{

	/*******Metodos***********************************/		    	

	public function data_person($id_persona)
	{

		return $this->query("SELECT *
							 FROM USUARIO
							 WHERE id_persona='$id_persona' 
							");	//campo selec indicar las filas que necesito la del mail y del pss		
	}

}

?>
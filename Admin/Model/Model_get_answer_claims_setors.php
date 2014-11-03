<?php

include_once( "modelodb.php");

class Model_get_answer_claims_setors extends modelodb
{ 
	
	public function get_answer_setors($id_claim)//id of the claim I want the .
			{
				return $this->query("SELECT id_sector,id_empleado,estado_reclamo,fecha,respuesta_sector
									FROM 		RECLAMO
									where  		id_reclamo='$id_claim'
									");
			}


	
}





?>

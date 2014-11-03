<?php

include_once( "modelodb.php");

class Model_get_answer_claims_setors extends modelodb
{ 
	
	public function get_answer_setors($id_claim)//id of the claim I want the .
			{
				return $this->query("SELECT r.id_sector,r.id_empleado,r.estado_reclamo,r.fecha,r.respuesta_sector,s.nombre_sector
									FROM 		RECLAMO r JOIN SECTOR s ON(r.id_sector=s.id_sector)
									where  		r.id_reclamo='$id_claim'
									");
			}


	
}





?>

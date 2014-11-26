<?php

include_once( "modelodb.php");

class Model_get_answer_claims_setors extends modelodb
{ 
	
	public function get_answer_setors($id_claim)//id of the claim I want the .
			{
				return $this->query("SELECT   s.nombre_sector,g.id_empleado,g.estado_reclamo,r.fecha,g.respuesta_al_reclamo
									FROM 		RECLAMO r  JOIN GESTION_RECLAMO g  ON(r.id_reclamo=g.id_reclamo) JOIN SECTOR s 
									ON 			(s.id_sector=g.id_sector)
									where  		r.id_reclamo='$id_claim'
									");
			}


	
}





?>

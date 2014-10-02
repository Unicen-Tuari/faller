<?php

include("./Model/modelodb.php");
/**
 * La clase ....
 */
class model_ver_reclamos extends modelodb
{
	
	public function ver_reclamo(){
			// 
				return $nv_r->query("
					SELECT * FROM RECLAMO_REL
				");
	}

	
}

?>
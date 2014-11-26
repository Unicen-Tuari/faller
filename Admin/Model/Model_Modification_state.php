<?php

include_once( "modelodb.php");

class Model_Modification_state extends modelodb
{ 
	
	public function state($id_empleado,$id_sector,$state)
			{
				return $this->query("UPDATE  EMPLEADO
									SET      activo='$state'
									WHERE    id_empleado='$id_empleado' AND id_sector='$id_sector'");
			}
				

}





?>

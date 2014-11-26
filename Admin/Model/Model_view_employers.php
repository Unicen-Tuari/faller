<?php

include_once( "modelodb.php");

class Model_view_employers extends modelodb
{ 
	
	public function view_employers($sector_empleado_logueado)
			{
					return $this->query("SELECT *
							 FROM EMPLEADO
							 WHERE id_sector='$sector_empleado_logueado' AND jefe_s!=1
							");
			}

	public function date_employ_especific($id_empleado)
			{
				return $this->query("SELECT *
							 FROM EMPLEADO
							 WHERE id_empleado='$id_empleado'
							");

			}
				

}





?>

<?php

include_once( "modelodb.php");

Class Model_comprobar_existencia_usuario extends modelodb
{

	/*******Metodos***********************************/		    	

	public function verificar_usuario($sector,$nombre,$clave)
	{

		return $this->query(
							"SELECT dni_empleado
							 FROM 	EMPLEADO
							 WHERE 	id_sector	= '$sector' 
							 AND 	clave 		='$clave' 
							 AND 	nombre	    ='$nombre'
							");	//campo selec indicar las filas que necesito la del mail y del pss		
	}





}

?>
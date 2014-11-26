<?php  

class Model_sign_in extends modelodb
   {

	/*******Atributos***********/
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/

	   	public function registrar($Reclamo_ingresado)
		{

			$sector			=$Reclamo_ingresado["sector"];
			$nombre			=$Reclamo_ingresado["nombre"];
			$apellido		=$Reclamo_ingresado["apellido"];
			$dni			=$Reclamo_ingresado["dni"];
			$email			=$Reclamo_ingresado["email"];
			$puesto_espesifico=$Reclamo_ingresado['puesto'];
			$pass			=$Reclamo_ingresado["pass"];



		return $this->query("INSERT INTO EMPLEADO(
					id_sector,
					dni_empleado, 
					nombre,
 					apellido, 
 					email, 
 					puesto_espesifico, 
 					clave )
			VALUES( 
					'$sector'			,
					'$dni'				,
					'$nombre'			, 
					'$apellido'			,	
					'$email'			, 
					'$puesto_espesifico',
					'$pass'				
			 	  )
			");

		}
		

		
}




?>
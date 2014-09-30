<?php

include( "modelodb.php");

class model_ver_reclamos extends modelodb
{ 
	private $id_usuario;

	public function ver_reclamo_M($id_usuario){
			// 
				return $this->query("
					SELECT *
					 FROM RECLAMO_REL
					 where id='$id_usuario'");
				
	}

	
}




 class model_crear_reclamo extends modelodb
   {

	/*******Atributos***********/
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/

	   	public function crear_reclamo($Reclamo_ingresado)
		{

		
			$arraySelect= array('O'=>'Obras Publicas','i'=>'Infraestructura',
								'a'=>'Asfalto','ie'=>'Intendente','l'=>'Luminaria',
								'ar'=>'Arboleda','clo'=>'Cloacas','gas'=>'Gas',
								'basura'=>'Basura');

			$sel = $Reclamo_ingresado["agregar_reclamo_selector"];
			$valorSector=$arraySelect[$sel];

			$id_pers = $Reclamo_ingresado["id_pers"];

			$foto_reclamo =$Reclamo_ingresado["agregar_reclamo_foto"];

			$fecha=date("y/m/d");

			$reclamo=$Reclamo_ingresado['agregar_reclamo_texto'];
			//Consulta - Parametros Posicionales
			/*
			INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
			VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
			*/
			$sql = "INSERT INTO RECLAMO_REL (id_persona, id_sector,
											 dni_empleado, sector_raiz, fecha, 
											 resumen_sector, area_actual,
											  area_ya_paso, estado_reclamo,
											   reclamo, foto_reclamo)
			 		VALUES( :id_persona, :id_sector, :dni_empleado,
			 				 :sector_raiz, :fecha, :resumen_sector, :area_actual,
			 				  :area_ya_paso, :estado_reclamo, :reclamo,:foto_reclamo)";


			$q = $this->conn;
			$q->execute(array(':id_persona'=>37198, 
								':id_sector'=>2, ':dni_empleado'=>null, 
								':sector_raiz'=>'Obras Publicas', 
								':fecha'=>$fecha, ':resumen_sector'=>'Aun no ha sido revisado.',
								 ':area_actual'=>2222, ':area_ya_paso'=>2222, 
								 ':estado_reclamo'=>'No visto', 'reclamo'=>'lalala',
								 'foto_reclamo'=>'$foto_reclamo'));


		}
}



?>
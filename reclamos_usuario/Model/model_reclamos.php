<?php

include_once( "modelodb.php");

class model_ver_reclamos extends modelodb
{ 
	

	public function ver_reclamo($id_usuario)
			{
				$usuario=$id_usuario[0]['id_persona'];
						
						return $this->query("SELECT *
						 					FROM RECLAMO_REL rl JOIN SECTOR s 
						 					ON(rl.id_sector=s.id_sector)
						 					where rl.id_persona='$usuario'" );


			}


	public function reclamo_finalizados($id_usuario)
			{
				/*return $this->query("SELECT *
									FROM RECLAMO_REL
									WHERE id_persona=$id_usuario
								 	AND estado_reclamo='Finalizado'");
			*/
			}


	public function reclamo_pendientes($id_usuario)
			{
			/*	return $this->query("SELECT *
									FROM RECLAMO_REL
									WHERE id_persona=$id_usuario
								 	AND estado_reclamo='Finalizado'");
			*/
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

			$sector_seleccionado = $Reclamo_ingresado["reclamo_selector"];
			$Sector=$arraySelect[$sector_seleccionado];

			$id_pers = $Reclamo_ingresado["reclamo_id"];


			$foto_del_reclamo =$Reclamo_ingresado["reclamo_foto"];

			$fecha=date("y/m/d");

			$reclamo=$Reclamo_ingresado['reclamo_texto'];
			//Consulta - Parametros Posicionales
			/*
			INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
			VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
			*/


			$sql = "INSERT INTO RECLAMO_REL 
						(	id_persona				,
							 id_sector 				,
							 dni_empleado			,
							 sector_raiz			,
							 fecha					, 
							 resumen_sector			,
							 area_actual			,
							 area_ya_paso			,
							 estado_reclamo			,
							 reclamo				,				 
							 foto_reclamo
						)
				VALUES(
							 :id_persona			,				
			 				 :id_sector				,
			 				 :dni_empleado			,
			 				 :sector_raiz			,
			 				 :fecha					, 
			 				 :resumen_sector		,
			 				 :area_actual			,
			 				 :area_ya_paso			, 
			 				 :estado_reclamo		, 
			 				 :reclamo				, 
			 				 :foto_reclamo
			 			)";


			$q=$this->connection(); 
			$preparado=$q->prepare($sql);

			$preparado->execute(
								array
									(
									 ':id_persona'				=>$id_pers			,				
					 				 ':id_sector'				=>2					,
					 				 ':dni_empleado'			=>null				,
					 				 ':sector_raiz'				=>$Sector			,
					 				 ':fecha'					=>$fecha		    , 
					 				 ':resumen_sector'			=>"ss"				,
					 				 ':area_actual'				=>2					,
					 				 ':area_ya_paso'			=>2					, 
					 			   	 ':estado_reclamo'			=>"No visto"		, 
					 				 ':reclamo'					=>$reclamo      	, 
					 				 ':foto_reclamo'			=>$foto_del_reclamo
					 				 )
								);

		}
}


class model_registrarse extends modelodb
   {

	/*******Atributos***********/
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/

	   	public function registrar($Reclamo_ingresado)
		{

			$nombre			=$Reclamo_ingresado["nombre"];
			$apellido		=$Reclamo_ingresado["apellido"];
			$dni			=$Reclamo_ingresado["dni"];
			$email			=$Reclamo_ingresado["email"];
			$Celular		=$Reclamo_ingresado["Celular"];
			$fecha_nacimiento=date("y/m/d");//$Reclamo_ingresado["fecha_nacimiento"];
			$Telefono_fijo	=$Reclamo_ingresado["Telefono_fijo"];
			$pass			=$Reclamo_ingresado["pass"];
			$direccion		=$Reclamo_ingresado["direccion"];
			$fecha_registro	=date("y/m/d");



			//insertar persona
			/*		INSERT INTO PERSONA( nombre,
					 apellido,
					 dni_persona,
					 fecha_nacimiento,
					 direccion,
					 celular,
					 Telefono_fijo, 
					 email, 
					 password,
					 fecha_registro
					 )
					VALUES( 'Franco',
							 'Aller', 
							 37198,
							 '2001/07/22',
			 				 '4 de Abril',
			 				  2284588180,
			 				  '',
			 				  'franco.e.aller@gmail.com',
			 				  'fran',
			 				  '2020/07/22'
			 			);
	
				*/

			// El id_persona debe incrementarse solo
			$sql = "INSERT INTO PERSONA(
					 nombre				,
					 apellido			,
					 dni_persona		,
					 fecha_nacimiento	,
					 direccion			,
					 celular			,
					 Telefono_fijo		, 
					 email				, 
					 password			,
					 fecha_registro
					 )
			VALUES( 
					:nombre				, 
					:apellido			,				
					:dni_persona		,
					:fecha_nacimiento	,
			 		:direccion			, 
			 		:celular			,
			 		:Telefono_fijo		, 
			 		:email				, 
			 		:password			,
			 		:fecha_registro
			 	  )";


			$q=$this->connection(); 
			$preparado=$q->prepare($sql);

			$preparado->execute(
								array
									(
														
										':nombre'				=>$nombre				, 
										':apellido'				=>$apellido				,				
										':dni_persona'			=>$dni					,
										':fecha_nacimiento'		=>$fecha_nacimiento		,
								 		':direccion'			=>$direccion			, 
								 		':celular'				=>$Celular				,
								 		':Telefono_fijo'		=>$Telefono_fijo		, 
								 		':email'				=>$email				, 
								 		':password'				=>$pass					,
								 		':fecha_registro'		=>$fecha_registro
					 				 )
								);


		}
		

		
}



?>

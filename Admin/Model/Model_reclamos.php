<?php

include_once( "modelodb.php");

class model_ver_reclamos extends modelodb
{ 
	

	public function ver_reclamo_sector($sector)
			{
						
						return $this->query("SELECT *
						 					FROM RECLAMO
						 					WHERE id_sector='$sector'
						 					" );


			}
	public function filtro_reclamo($filtro)
			{
						if($filtro==="sector_raiz")
						{
							return $this->query("SELECT *
											FROM RECLAMO r
											JOIN SECTOR s  
											ON(r.id_sector=s.id_sector)
											WHERE s.id_sector=2
											ORDER BY   s.sector_raiz DESC ");
						}
						


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

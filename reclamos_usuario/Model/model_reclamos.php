<?php

include_once( "modelodb.php");

class model_ver_reclamos extends modelodb
{ 
	

	public function ver_reclamo($id_usuario)//tendria que llamarse buscar reclamos ya q hace una consulta ,PENDIENTE A CAMBIAR
			{

						return $this->query("SELECT *
						 					FROM RECLAMO 
						 					where id_persona='$id_usuario'"
						 					 );


			}
	public function reclamo_espesifico($id_usuario,$id_reclamo)
			{
						
						return $this->query("SELECT *
						 					FROM RECLAMO 
						 					where id_persona='$id_usuario'
						 					AND   id_reclamo='$id_reclamo'	
						 					" );


			}


/*
"SELECT *
						 					FROM RECLAMO_REL rl JOIN SECTOR s 
						 					ON(rl.id_sector=s.id_sector)
						 					where rl.id_persona='$usuario'" );


*/

	public function reclamo_finalizados($id_usuario)
			{
			$r_f= $this->query("SELECT count(id_reclamo)
									FROM RECLAMO
									WHERE id_persona='$id_usuario'
								 	AND estado_reclamo='Finalizado'");
				return $r_f[0]["count(id_reclamo)"];
			}


	public function reclamo_pendientes($id_usuario)
			{
				$r_p= $this->query("SELECT count(id_reclamo)
									FROM RECLAMO
									WHERE id_persona='$id_usuario'
								 	AND estado_reclamo='No visto'");
				return $r_p[0]["count(id_reclamo)"];
			
			}
	
	
}

class model_crear_reclamo extends modelodb
   {

	/*******Atributos***********/
	

		/*****acciones posibles a realizar con un reclamo******/

	   	public function crear_reclamo($Rec,$Selec,$Fot,$id)
		{
			$sectores_raiz = array(	1 	=> "Obras Publicas",
									2	=> "Infraestructura",
									3	=> "Asfalto",
									4	=> "Intendente",
									5	=> "Luminaria",
									6	=> "Arboleda",
									7	=> "Cloacas",
									8	=> "Gas",
									9	=> "Basura",
									 );

			
			$sector_raiz=$sectores_raiz[$Selec];

			$sector_seleccionado = $Selec;

			$id_pers = $id;

			$foto_del_reclamo ="./imagenes/".$Fot;

			$fecha=date("y/m/d");

			$reclamo=$Rec;
			//Consulta - Parametros Posicionales
			/*
			INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, id_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
			VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
			*/


			$sql = "INSERT INTO RECLAMO 
						(	 id_persona				,
							 id_sector 				,
							 id_empleado			,
							 sector_raiz			,
							 fecha					, 
							 resumen_sector			,
							 area_actual			,
							 areas_que_ya_ha_pasado	,
							 estado_reclamo			,
							 reclamo				,				 
							 foto_reclamo
						)
				VALUES(
							 :id_persona			,				
			 				 :id_sector				,
			 				 :id_empleado			,
			 				 :sector_raiz			,
			 				 :fecha					, 
			 				 :resumen_sector		,
			 				 :area_actual			,
			 				 :areas_que_ya_ha_pasado, 
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
					 				 ':id_sector'				=>$sector_seleccionado,
					 				 ':id_empleado'				=>null				,
					 				 ':sector_raiz'				=>$sector_raiz		,
					 				 ':fecha'					=>$fecha		    , 
					 				 ':resumen_sector'			=>"ss"				,
					 				 ':area_actual'				=>2					,
					 				 ':areas_que_ya_ha_pasado'	=>2					, 
					 			   	 ':estado_reclamo'			=>"No visto"		, 
					 				 ':reclamo'					=>$reclamo      	, 
					 				 ':foto_reclamo'			=>$foto_del_reclamo
					 				 )
								);

		}
}





?>

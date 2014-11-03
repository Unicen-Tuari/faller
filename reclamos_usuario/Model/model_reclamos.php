<?php

include_once( "modelodb.php");

class model_ver_reclamos extends modelodb
{ 
	

	public function ver_reclamo($id_usuario)//tendria que llamarse buscar reclamos ya q hace una consulta ,PENDIENTE A CAMBIAR
			{

						return $this->query("SELECT *
						 					FROM RECLAMO 
						 					where id_persona='$id_usuario'
						 					AND sector_raiz is not null"
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

			$this->query(
					"INSERT INTO RECLAMO( id_persona, id_sector, id_empleado, sector_raiz, fecha, areas_que_ya_ha_pasado, estado_reclamo, reclamo,foto_reclamo) 
					VALUES( '$id_pers', $sector_seleccionado, null, '$sector_seleccionado','$fecha',2,'No visto','$reclamo','$foto_del_reclamo')");



		}
}





?>

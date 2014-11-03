<?php

include_once( "modelodb.php");

class Modelo_respond_claim extends modelodb
{


	public function respond($data_respond)
			{

				$sectores = array(	1 	=> "Obras Publicas",
									2	=> "Infraestructura",
									3	=> "Asfalto",
									4	=> "Intendente",
									5	=> "Luminaria",
									6	=> "Arboleda",
									7	=> "Cloacas",
									8	=> "Gas",
									9	=> "Basura",
									 );
					$id_claim= $data_respond['id_claim'];

					$id_person_to_respond=$data_respond['id_persona']; 

					$id_sector=$data_respond['id_sector'];		

					$id_employ=$data_respond['id_employ']; 		
					


					$state=$data_respond['state'];

					$respond=$data_respond['respond_claim_text'];

					//$reclamo=$data_respond['reclamo'];

					$sector=$data_respond['claim_selector_sector'];

					//$Document ="./Documentos/".$Doc;


					$fecha=date("y/m/d");
			$this->query("INSERT INTO RECLAMO(id_reclamo,id_persona, id_sector, id_empleado, fecha, respuesta_sector, areas_que_ya_ha_pasado, estado_reclamo, reclamo,foto_reclamo) 
						VALUES('$id_claim','$id_person_to_respond',$sector, '$id_employ','$fecha','Aun no ha sido visto por este sector',2,'No Visto','el original','Sin foto')");


					$this->query("UPDATE  RECLAMO
								SET      estado_reclamo='$state' , delegacion='$sector'
								WHERE    id_reclamo='$id_claim' AND  sector_raiz is not null");

					
					$this->query("UPDATE  RECLAMO
								SET      respuesta_sector='$respond', estado_reclamo='$state'
								WHERE    id_reclamo='$id_claim' AND  id_sector='$id_sector'");


				}
		
			


}


			
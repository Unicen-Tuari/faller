<?php

include_once( "modelodb.php");

class Modal_view_claims extends modelodb
{ 
	



	public function filtering_claims_area($area,$filter)
			{

					if ($filter=="fecha")
							{
								
							return $this->query("	SELECT *
									FROM 		RECLAMO rm JOIN USUARIO us
									ON 			(rm.id_persona=us.id_persona)
									where  		sector_raiz='$area' or delegacion='$area'
									ORDER BY  fecha DESC");

											
										
							}
					else 
						if ($filter=="sector_raiz")
							{

							return $this->query("	SELECT *
									FROM 		RECLAMO rm JOIN USUARIO us
									ON 			(rm.id_persona=us.id_persona)
									where  		sector_raiz='$area' or delegacion='$area'
									ORDER BY  sector_raiz DESC");
										
							}
					else 
						if ($filter=="dni_persona")
							{
								
							return $this->query("	SELECT *
									FROM 		RECLAMO rm JOIN USUARIO us
									ON 			(rm.id_persona=us.id_persona)
									where  		sector_raiz='$area' or delegacion='$area'
											ORDER BY  dni_persona DESC");
										
							}
			}

	public function view_claims_area($area,$filter)
			{


				if ($filter==null){   	/*claim without filter*/
								return $this->query("	SELECT *
									FROM 		RECLAMO rm JOIN USUARIO us
									ON 			(rm.id_persona=us.id_persona)
									where  		sector_raiz='$area' or delegacion='$area'");
				}else
					{
							
						return $this->filtering_claims_area($area,$filter);
					}
			}


	public function view_claims_especific($id_claim)
			{

				return $this->query("SELECT *
									FROM RECLAMO
									WHERE id_reclamo='$id_claim' 
									AND sector_raiz IS NOT NULL
								 	");
			
			}

	public function reclamo_finalizados($id_usuario)
			{
				/*return $this->query("SELECT *
									FROM RECLAMO
									WHERE id_persona=$id_usuario
								 	AND estado_reclamo='Finalizado'");
			*/
			}


	public function reclamo_pendientes($id_usuario)
			{
			/*	return $this->query("SELECT *
									FROM RECLAMO
									WHERE id_persona=$id_usuario
								 	AND estado_reclamo='Finalizado'");
			*/
			}
	
	
}





?>

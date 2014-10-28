<?php

include_once( "modelodb.php");

Class Model_comprobar_existencia_usuario extends modelodb
{

	/*******Atributos***********/

	/*******Metodos***********************************/		    	

	public function verificar_usuario($email)
	{

		$datos=$this->query("SELECT id_persona,password 
							 FROM USUARIO
							 WHERE email='$email' 
							 ");	//campo selec indicar las filas que necesito la del mail y del pss		


		if ($datos!=null)
		{
		   $ar_id_pass= array();
		   $ar_id_pass['id']=$datos[0]["id_persona"];
		   $ar_id_pass['pass']=$datos[0]["password"];

		   return  $ar_id_pass;

		}else
			{
				return $datos="consulta_vacia";
			}

	}


}

?>
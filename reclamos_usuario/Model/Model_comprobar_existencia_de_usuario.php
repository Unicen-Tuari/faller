<?php

include_once( "modelodb.php");

Class Model_comprobar_existencia_usuario extends modelodb
{

	/*******Atributos***********/

	/*******Metodos***********************************/		    	

	public function verificar_usuario($email,$password)
	{

		$datos=$this->query("SELECT id_persona  
							 FROM USUARIO
							 WHERE email='$email' 
							 AND password='$password'");	//campo selec indicar las filas que necesito la del mail y del pss		

		if ($datos!=null)
		{
		   return $datos[0]["id_persona"];

		}else
			{
				return $datos="consulta_vacia";
			}

	}


}

?>
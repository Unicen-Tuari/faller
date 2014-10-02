<?php

include_once( "modelodb.php");

Class Login extends modelodb
{
	private $email;
	private $password;

	function verificar_usuario($email,$password)
	{

		return $this->query("SELECT id_persona  
							 FROM PERSONA
							 WHERE email='$email' 
							 AND password='$password'");	//campo selec indicar las filas que necesito la del mail y del pss		
	}
}

?>
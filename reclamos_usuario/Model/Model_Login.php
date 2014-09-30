<?php

include( "modelodb.php");

Class Login extends modelodb
{
	private $email;
	private $password;

	function verificar_usuario($password,$email)
	{

		return $this->query("SELECT *  
							 FROM PERSONA
							 WHERE email='$email' 
							 AND password='$password'");	//campo selec indicar las filas que necesito la del mail y del pss		
	}
}

?>
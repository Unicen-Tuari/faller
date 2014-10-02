<?php  
		try{

		$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));		
		}
		catch(PDOException $pe)
		{
		  die('Error de conexion, Mensaje: ' -$pe->getMessage());
		}
?>		


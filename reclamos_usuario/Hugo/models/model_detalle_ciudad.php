<?php
class Model
{
	private $conn;

	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		

	public function ObtenerDetalleCiudad($id_ciudad){
		
		$sql = "SELECT *
		FROM   ciudad WHERE id_ciudad=$id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();

		//print_r($query->fetchAll());
		//die();
	}

	/*
	public function ObtenerCiudades(){
		
		$sql = "SELECT c.id_ciudad,nombre_ciudad,i.path
		FROM   ciudad c
		JOIN   imagen i ON (i.id_ciudad = c.id_ciudad)
		GROUP BY c.id_ciudad ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/
}
?>
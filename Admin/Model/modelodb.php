<?php

 class modelodb
{

	
	private $user = 'root';
	private $pass = "";
	private $host = 'localhost';
	private $db = 'Reclamos';
	protected $conn = null;
	
	
	
	protected function connect(){
		$conn = null;
		try{
			$conn = new PDO(
				"mysql:host=$this->host;dbname=$this->db",
				$this->user,
				$this->pass
			);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
		$this->conn = $conn;
		return $conn;
	}

	
	public function connection(){
		if ($this->conn == null)
			$this->connect();
		return $this->conn;	
	}
	
	
	public function query($sql){
		$conn = $this->connection();
		
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()));
		}
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		
		return $data;
	}
	 
	
}

?>
 <?php

 	class Consulta_base
 	{
 		public $host = 	"localhost";
		public $db	  =    "MIGRACION";
		public $user	= 	"root";
		public $pass	= 	"";

 	
		try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
			}
		catch(PDOException $pe)
			{
				die('Error de conexion, Mensaje: ' -$pe->getMessage());
			}
		//Ejecucion
		 $q	 = $conn->query($sql);
		
		//Si es null, hubo un error
		if(!$q)
			{
  				die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
			}

		public function __construct(){
		//Configuración
		include('configuracion.php');
		//Conexión
		include('conexion.php');

		}

 	}

   class nuevo_reclamo extends Consulta_base
   {
   	public function agregar_reclamo($Reclamo_ingresado)
	{
		$suma_id=0;
		IF($parametros_Reclamo){
			$q = $conn->query($sql);
				while($r = $q->fetch()){
			     $NR= $r["id_reclamo"];
			      $suma_id= $NR +1;
			     }
		} 

/*FIN Aumnetar el id*/

/*******************INSERTAR EN TABLA MENU EX3 Y SE VISUALIZA EN EX4 **********************************/
//Consulta - Parametros Posicionales
/*
INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
*/

$sql = "INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo, foto_reclamo)
 				          VALUES(:id_reclamo, :id_persona, :id_sector, :dni_empleado, :sector_raiz, :fecha, :resumen_sector, :area_actual, :area_ya_paso, :estado_reclamo, :reclamo,:foto_reclamo)";

$q = $conn->prepare($sql);
$q->execute(array(':id_reclamo'=>$suma_id, ':id_persona'=>37198, ':id_sector'=>2, ':dni_empleado'=>null, ':sector_raiz'=>'Obras Publicas' ,':fecha'=>$fecha, ':resumen_sector'=>'Aun no ha sido revisado.', ':area_actual'=>$suma_id, ':area_ya_paso'=>$suma_id, ':estado_reclamo'=>'No visto', 'reclamo'=>$Reclamo_ingresado,'foto_reclamo'=>'$foto_reclamo')
);


	}  


   }

	

 ?>
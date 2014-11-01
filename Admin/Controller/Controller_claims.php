
<?php


class Controller_claims
{
	/**********ATRIBUTOS******************/
	//private $vista_home;
	private $View_claims;
	private $View_table_claims;
	private $view_claims_especific;
	private $Model_view_claims;
	private $model_comprobar_existencia_usuario;
	private $Controller_reclaimer;

	/************Constructor************************/
	function __construct()
	{
		//include_once("./View/View_home_admin.php");
		include_once("./View/View_claims_area.php");
		include_once("./View/View_table_claims.php");
		include_once("./View/View_claim_spesific.php");

		include_once("./Model/Modal_view_claims.php");
		include_once("./Model/Model_comprobar_existencia_de_usuario.php");

		include_once("./Controller/Controller_reclaimer.php"); 
		
		$this->View_claims			= new View_claims_area();
		$this->View_table_claims 	= new View_table_claims();
		$this->view_claims_especific= new View_claim_spesific();
		$this->Model_view_claims 	= new Modal_view_claims();
		$this->Controller_reclaimer = new Controller_reclaimer();
		 //$this->Controller_user 	= new controller_user();
	}

	/**************FUNCIONES******************************/

	public function view_claims()
			{
				$user=$_SESSION['nombre'];
				if(!isset($_POST["fitro_reclamo"]))
				{
					$filter=null;

				}else
				 {
				 	$filter=$_POST["fitro_reclamo"];

				 }

				$claims= $this->get_claims($_SESSION['Sector'],$filter);
			
				if($filter==null) {
					$this->View_claims->claims($claims,$user);
				}else
					{
					
						$this->View_table_claims->table($claims,$user);
					}
				
			}	

	public function get_claims($sector,$filtro=0)
			{				
				return $Query_claims_area= $this->Model_view_claims->view_claims_area($sector,$filtro);
			}

	public function cambiar_area()
			{

			
			}



	public function view_claims_especific()
			{
				$user=$_SESSION['nombre'];
				$id_claim=$_POST["id_reclamo"];
				$data_claim=$this->Model_view_claims->view_claims_especific($id_claim);
				$id_reclaimer=$data_claim[0]['id_persona'];
				$data_reclaimer=$this->Controller_reclaimer->reclaimer_data($id_reclaimer);

				$this->view_claims_especific->claim_spesific($data_claim,$user,$data_reclaimer);
				
			}



}


?>
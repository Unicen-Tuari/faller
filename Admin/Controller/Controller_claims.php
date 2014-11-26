
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
	private $Modelo_respond_claim;
	private $Model_get_answer_claims_setors;
	private $Model_view_employers;
	private $Model_date_person_espesific;

	private $Controller_reclaimer;
	private $Controller_mails;

	/************Constructor************************/
	function __construct()
	{
		//include_once("./View/View_home_admin.php");
		include_once("./View/View_claims_area.php");
		include_once("./View/View_table_claims.php");
		include_once("./View/View_claim_spesific.php");

		include_once("./Model/Modal_view_claims.php");
		include_once("./Model/Modelo_respond_claim.php");
		include_once("./Model/Model_comprobar_existencia_de_usuario.php");
		include_once("./Model/Model_get_answer_claims_setors.php");
		include_once("./Model/Model_view_employers.php");
		include_once("./Model/Model_date_person_espesific.php");

		include_once("./Controller/Controller_reclaimer.php"); 
		include_once("./Controller/Controller_mails.php"); 
		
		$this->View_claims			= new View_claims_area();
		$this->View_table_claims 	= new View_table_claims();
		$this->view_claims_especific= new View_claim_spesific();
		$this->Model_view_claims 	= new Modal_view_claims();
		$this->Model_get_answer_claims_setors= new Model_get_answer_claims_setors();
		$this->Controller_reclaimer = new Controller_reclaimer();
		$this->Modelo_respond_claim = new Modelo_respond_claim();
		$this->Model_view_employers = new Model_view_employers();
		$this->Model_date_person_espesific=new Model_date_person_espesific();

		$this->Controller_mails= new managment_email();
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

	public function change_area()
			{

			
			}



	public function view_claims_especific()
			{
				$user=$_SESSION['nombre'];
				$id_claim=$_POST["id_reclamo"];
				$data_claim=$this->Model_view_claims->view_claims_especific($id_claim);
				$id_reclaimer=$data_claim[0]['id_persona'];
				$data_reclaimer=$this->Controller_reclaimer->reclaimer_data($id_reclaimer);
				$data_answer_sector=$this->get_respond_claims_setors($id_claim);
				$this->view_claims_especific->claim_spesific($data_claim,$user,$data_reclaimer,$data_answer_sector);
				
			}
	public function view_claims_especific_for_eamail()
			{
					
				$id_claim=$_GET['id_of_claim'];
				$data_claim=$this->Model_view_claims->view_claims_especific($id_claim);
				$id_reclaimer=$data_claim[0]['id_persona'];
				$data_reclaimer=$this->Controller_reclaimer->reclaimer_data($id_reclaimer);
				$data_answer_sector=$this->get_respond_claims_setors($id_claim);
				$this->view_claims_especific->claim_spesific($data_claim,$user,$data_reclaimer,$data_answer_sector);
				
			}


	public function get_respond_claims_setors($id_claim)
			{
					return $this->Model_get_answer_claims_setors->get_answer_setors($id_claim);
			}		

	public function respond_claims()
			{	
				$user=$_SESSION['nombre'];
				$data_respond=array();
					$data_respond['id_employ']			=$_SESSION['id']; 		
					$data_respond['id_sector']			=$_SESSION['Sector'];
					$data_respond['id_persona']			=$_POST['id_person_to_respond'];	
					$data_respond['id_claim']			=$_POST["id_claim_to_respond"];
					$data_respond['state']				=$_POST["selector_state"];
					//$data_respond['document']			=$_POST["document"];
					$data_respond['respond_claim_text'] =$_POST["respond_claim_text"];
					$data_respond['claim_selector_sector'] =$_POST["claim_selector_sector"];
					$data_respond['sector_text']		=$_POST["sector_text"];



					$this->Modelo_respond_claim->respond($data_respond);
					$id_employ=$_SESSION['id'];
					$data_employ=$this->Model_view_employers->date_employ_especific($id_employ);
				$emisor=$data_employ[0]['email'];

					$data_p=$this->Model_date_person_espesific->data_person($data_respond['id_persona']);
				$reseptor=$data_p[0]['email'];

				$link_reclamo=$data_respond['id_claim'];
				$mensaje="Tu reclamo ha avanzado.";
					$this->Controller_mails->enviar_mail($emisor,$reseptor,$link_reclamo,$mensaje);
		/*	print_r($emisor."</br>");
			print_r($reseptor."</br>");
			print_r($link_reclamo."</br>");
			print_r($mensaje."</br>");
				die();
				*/
				$data_claim=$this->Model_view_claims->view_claims_especific($data_respond['id_claim']);

				$data_reclaimer=$this->Controller_reclaimer->reclaimer_data($data_respond['id_persona']);
				$data_answer_sector=$this->get_respond_claims_setors($data_respond['id_claim']);
				$this->view_claims_especific->claim_spesific($data_claim,$user,$data_reclaimer,$data_answer_sector);
				
			}			



}


?>
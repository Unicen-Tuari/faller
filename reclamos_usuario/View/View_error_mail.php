<?php

include_once("view.php");


class error_claim_email extends View
{
	public function pagina_error($id_reclamo,$id_person_of_reclaim)
	{

		$this->smarty->assign("id_claim_email",$id_reclamo);	
		$this->smarty->assign("id_person_of_reclaim",$id_person_of_reclaim);	
		$this->smarty->display('Error_mail.tpl');
	}
}

?>
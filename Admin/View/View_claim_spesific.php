<?php

include_once("View.php");


class View_claim_spesific extends View
{
	public function claim_spesific($data_claim,$user,$data_reclaimer)
	{
			$this->smarty->assign("user",$user);
			$this->smarty->assign("data_claim",$data_claim);	
			$this->smarty->assign("data_reclaimer",$data_reclaimer);	
			
			$this->smarty->display('Reclamo_espesifico.tpl');
	}

}


?>
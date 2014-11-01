<?php

include_once("View.php");


class View_claims_area extends View
{
	public function claims($r_sector,$usuario)
	{


		if($r_sector!= null)
		{
			$this->smarty->assign("usuario", $usuario);	
			$this->smarty->assign("reclamos",$r_sector);	
		}
		$this->smarty->display('Lista_reclamos_sector.tpl');
	}

}


?>


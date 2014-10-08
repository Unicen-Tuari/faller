<?php

include_once("View.php");


class View_Reclamos_Sector extends View
{
	public function Reclamos($sector)
	{


		if($sector!= null)
		{
		
			$this->smarty->assign("reclamos",$sector);	
		}
		$this->smarty->display('Lista_reclamos_sector.tpl');
	}

}


?>
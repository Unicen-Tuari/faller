
<?php

include_once("View.php");


class View_table_claims extends View
{
	public function table($r_sector,$usuario)
	{



			$this->smarty->assign("usuario", $usuario);	
			$this->smarty->assign("reclamos",$r_sector);	
		
		$this->smarty->display('tabla_reclamos.tpl');
	}

}


?>
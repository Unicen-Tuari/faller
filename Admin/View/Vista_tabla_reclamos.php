
<?php

include_once("View.php");


class View_tabla_reclamo extends View
{
	public function tabla($r_sector,$usuario)
	{



			$this->smarty->assign("usuario", $usuario);	
			$this->smarty->assign("reclamos",$r_sector);	
		
		$this->smarty->display('tabla_reclamos.tpl');
	}

}


?>
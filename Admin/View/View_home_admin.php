<?php

include_once("View.php");


class View_Home_Admin extends View
{
	public function Home($datos_home,$usuario)
	{

	
		if($datos_home!= null)
		{
			$this->smarty->assign("usuario",$usuario);
			$this->smarty->assign("reclamos",$datos_home);	
		}
		$this->smarty->display('Reclamo_espesifico.tpl');
	}

}


?>
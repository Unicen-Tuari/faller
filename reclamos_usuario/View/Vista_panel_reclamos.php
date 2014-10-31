<?php

include_once("view.php");

class Vista_panel_reclamos extends View
{
	public function visualizar_datos_panel($arr_panel)
	{
		if (isset($arr_panel['finalizados']))
			{
			 	$this->smarty->assign("r_f",$arr_panel['finalizados']);
			}
		if (isset($arr_panel['pendientes']))
			{
			 	$this->smarty->assign("r_p",$arr_panel['pendientes']);
			}
		/*if (isset($arr_panel['']))
			{
			 	$this->smarty->assign(" ",$arr_panel['']);
			}
		if (isset($arr_panel['']))
			{
		 		$this->smarty->assign(" ",$arr_panel['']);
			}
		*/
		$this->smarty->display('Paneles_informativos.tpl');
	}
}

?>
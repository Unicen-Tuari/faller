<?php

include_once("view.php");




class View_Home extends View
{
	public function Home($lista_de_reclamos,$r_p,$r_f)
	{

       	$this->smarty->assign("r_f",$r_f);
       	$this->smarty->assign("r_p",$r_p);
		$this->smarty->assign("reclamos",$lista_de_reclamos);	
		
		$this->smarty->display('Home.tpl');
	}
}

?>
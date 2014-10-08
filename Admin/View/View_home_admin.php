<?php

include_once("View.php");


class View_Home_Admin extends View
{
	public function Home()
	{

		$lista_de_reclamos=null;
		if($lista_de_reclamos!= null)
		{
		
			$this->smarty->assign("reclamos",$lista_de_reclamos);	
		}
		$this->smarty->display('Home.tpl');
	}

}


?>
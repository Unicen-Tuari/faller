<?php

include_once("view.php");




class View_Home extends View
{
	public function Home($lista_de_reclamos)
	{


		if($lista_de_reclamos!= null)
		{
		
			$this->smarty->assign("reclamos",$lista_de_reclamos);	
		}
		$this->smarty->display('Home.tpl');
	}

}


?>
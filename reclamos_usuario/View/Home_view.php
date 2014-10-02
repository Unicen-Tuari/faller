<?php

include_once("view.php");


class view_Home extends View
{
	public function Home_v($lista_de_reclamos)
	{


		if($lista_de_reclamos!= null)
		{
			$this->smarty->assign("reclamos",$lista_de_reclamos);	
		}
		$this->smarty->display('Home.tpl');
	}

}


?>
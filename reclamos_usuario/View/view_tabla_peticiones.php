<?php

include_once("view.php");




class view_tabla_peticiones extends View
{
	public function tabla_peticiones($lista_de_reclamos)
	{

		$this->smarty->assign("reclamos",$lista_de_reclamos);	
		
		$this->smarty->display('view_tabla_peticiones.php');
	}

}


?>
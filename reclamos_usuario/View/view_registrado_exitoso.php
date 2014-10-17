<?php

include_once("view.php");


class view_registrado_exitoso extends View
{
	public function r_exitoso()
	{

		$this->smarty->display('registrado_exitoso.tpl');
	}

}


?>
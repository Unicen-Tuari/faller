<?php

include_once("view.php");


class error_504 extends View
{
	public function pagina_error()
	{
		$this->smarty->display('error504.tpl');
	}
}

?>
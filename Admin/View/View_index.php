<?php


include_once("View.php");


class View_index extends View
{


	/*function __construct()
	{

	}
	*/

	function visualizar_idex()
	{
		$this->smarty->display('index.tpl');

	}

}

?>

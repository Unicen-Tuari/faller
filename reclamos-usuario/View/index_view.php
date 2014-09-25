<?php

require('./libs/Smarty.class.php');//siempre va en la primer linea***********************************



class view_usuario 
{
	public $smarty;   

	/*public function __construct()
	{
	$smarty = new Smarty;
	}
	*/
	public function home()
	{
		$smarty = new Smarty;
		$smarty->display('index.tpl');

	}

}



?>
<?php

require('./libs/Smarty.class.php');//siempre va en la primer linea***********************************


class View
{
	
	protected $smarty;
	
	public function __construct()
	{
		$this->smarty = new Smarty();
		//$this->smarty->debugging=true;
	}
	
}


?>
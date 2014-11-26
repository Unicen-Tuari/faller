<?php

include_once("View.php");


class View_register_susses extends View
{
	public function r_susses()
	{

		$this->smarty->display('Sign_in_susses.tpl');
	}

}


?>
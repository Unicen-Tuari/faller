<?php

include("view.php");


class Home_view extends View
{
	public function Home()
	{

		$this->smarty->display('Home.tpl');
	}

}


?>
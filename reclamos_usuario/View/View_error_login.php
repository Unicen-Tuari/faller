<?php 
include_once("view.php");


class View_error_login extends View
{

	public function error_login($mail_existente=false)
	{

		if ($mail_existente==false)
		{
			$mensaje_error="Error,verifique que la contraseña y el email ingresados sean los correctos. ";
		}
		else
		{
			$mensaje_error=$mail_existente;
		}

		$this->smarty->assign("error_login",$mensaje_error);	
		$this->smarty->display('error_login.tpl');

	}

}

?>
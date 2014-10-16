<?php 
include_once("view.php");


class view_ver_modificar extends View
{

	public function ver_modificar($reclamo,$foto_reclamo)
	{


		
		$this->smarty->assign("foto_reclamo",$foto_reclamo);	
		$this->smarty->assign("dato_del_reclamo",$reclamo);	
		$this->smarty->display('ver_o_modificar_reclamo.tpl');

	}

}

?>
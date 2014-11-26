<?php

include_once("View.php");


class View_employers extends View
{
	public function employers($all_employers)
		{
				$this->smarty->assign("employers",$all_employers);	
		
				$this->smarty->display('Employers.tpl');
		}

	public function update_table_employers($all_employers)
		{
				$this->smarty->assign("employers",$all_employers);	
		
				$this->smarty->display('table_employers.tpl');
		}
	public function not_admin($all_employers)
		{
				$this->smarty->assign("employers",$all_employers);	
		
				$this->smarty->display('not_admin.tpl');
		}

}


?>
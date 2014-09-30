<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirModal(){
		
		if (isset($_GET['id_ciudad'])) {

			$this->view->MostrarDetalleCiudad($this->model->ObtenerDetalleCiudad($_GET['id_ciudad']));

		}
		$this->view->ImprimirModal();
	}
}	
?>
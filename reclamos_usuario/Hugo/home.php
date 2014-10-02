<?php
include './controllers/controller_home.php';
include './views/view_home.php';
include './models/model_home.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirPagina();	
?>

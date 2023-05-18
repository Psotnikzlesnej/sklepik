<?php
$component_name='parameters';
include_once __DIR__ . '/../models/'.$component_name.'.model.php';
include_once __DIR__ . '/../utils/php/controller.php';
$view_path =__DIR__ . '/../views/'.$component_name.'.view.php';

$model = new ParametersModel();
$controller = new Controller($model, $view_path);

$controller->renderView();
?>
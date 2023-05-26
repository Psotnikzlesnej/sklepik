<?php
namespace ProductSimilar;
$component_name='similar';
include_once __DIR__ . '/../models/'.$component_name.'.model.php';
include_once __DIR__ . '/../utils/php/controller.php';
$view_path =__DIR__ . '/../views/'.$component_name.'.view.php';

$model = new Model();
$controller = new \Utils\Controller($model, $view_path);

$controller->renderView();
?>
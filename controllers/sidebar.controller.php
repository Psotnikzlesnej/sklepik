<?php
namespace Sidebar;
$component_name='sidebar';
include_once MODEL_ROOT.'/'.$component_name.'.model.php';
include_once UTIL_ROOT . '/php/controller.php';
$view_path = VIEW_ROOT . '/'.$component_name.'.view.php';

$model = new Model();
$controller = new \Utils\Controller($model, $view_path);

$controller->renderView();
?>
<?php
namespace Utils;

class Controller {
  function __construct($model, $view_path){
    $this->model = $model;
    $this->view_path = $view_path;
  }

  public function renderView(){
    $variables_array = $this->model->getEverything() ?? [];
    echo $this->view_path;
    odrobaczanie($variables_array);
    extract($variables_array);
    require $this->view_path;
  }
}
?>
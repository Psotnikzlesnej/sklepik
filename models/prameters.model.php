<?php

class ProductParametersModel{
    function __construct(){
        global $mysqli;
        $this ->mysqli = $mysqli;
        $this->id = $GLOBALS['product_id'] ?? null;
      }
    private function getProductParameters(){
    $query = "SELECT value, parameter FROM parameter_value";
    $result = $mysqli->query($query);
    $parameters = $result -> fetch_assoc();
    return $result;
    }
    public function getEverything(){
    $parameters = $this->getProductParameters();
    return ['parameters' => $parameters];
    }
}
?>
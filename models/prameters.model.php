<?php

class get_product_parametersModel{
    function _construct(){
        global $mysqli;
        $this ->mysqli = $mysqli;
        $this->id = $GLOBALS['product_id'] ?? null;
      }
    private function get_product_parameters(){
    $query = "SELECT value, parameter FROM parameter_value";
    $result = $mysqli->query($query);
    $parameters = $result -> fetch_assoc();
    return $result;
    }
    public function get_everything(){
    $parameters = $this->get_product_parameters();
    return $parameters;
    }
}
?>
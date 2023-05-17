<?php
    function get_product_parameters($id){
        global $mysqli;
    $query = "SELECT value, parameter FROM parameter_value";
    $result = $mysqli->query($query);
    return $result;
    }
?>
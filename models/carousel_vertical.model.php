<?php
    function get_vertical_carousel_image($id){
        global $mysqli;
    $query = "SELECT image_name FROM product_image";
    $result = $mysqli->query($query);
    return $result;
    }
?>
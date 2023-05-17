<?php
    function get_product_description($id){
        global $mysqli;
    $query = "SELECT description, video_url FROM product";
    $result = $mysqli->query($query);
    return $result;
    }
?>
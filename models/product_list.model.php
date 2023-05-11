<?php
    require('../utils/php/config.php');

    function getProducts(){    
    $count_query = $mysqli -> query("SELECT count(ID) from product");
    $count_result = $count_query->fetch_assoc();
    $count = $count_result["count(ID)"];
    $items_per_page = 12;
     $math = is_float(is_numeric($count) / 12);
     $page = ceil($math);
    $offset = ($page - 1) * $items_per_page;
     $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
     JOIN delivery ON delivery.ID = product.delivery_ID 
     JOIN product_flag ON product_flag.product_ID = product.ID
     JOIN flag ON product_flag.flag_ID = flag.ID
     LEFT JOIN product_image ON product_image.product_ID = product.ID LIMIT ". $offset . ",". $items_per_page ."";

      $result= $mysqli -> query($query);
      while ($array = $result->fetch_assoc()) {
        print_r($array);
        echo '<br>';
      }
     return $result;
    }
?>
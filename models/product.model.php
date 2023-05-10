<?php
// function getFeatured(){
//     $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
//     JOIN delivery ON delivery.ID = product.delivery_ID 
//     JOIN product_flag ON product_flag.product_ID = product.ID
//     JOIN flag ON product_flag.flag_ID = flag.ID
//     JOIN product_image ON product_image.product_ID = product.ID";
//     $result= $mysqli -> query($query);
//     return $result;
//} przyda sie nam później
function getFeatured(){
    $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
         JOIN delivery ON delivery.ID = product.delivery_ID 
        JOIN product_flag ON product_flag.product_ID = product.ID
         JOIN flag ON product_flag.flag_ID = flag.ID
         JOIN product_image ON product_image.product_ID = product.ID
         WHERE product.ID = 1";
         $result= $mysqli -> query($query);
         return $result;
        }


function getDescription(){
    $query = "SELECT product.description, product.video_url, parameter_value.parameter, parameter_value.value FROM product
    JOIN product_parameter_value ON product_parameter_value.product_ID = product.ID
    JOIN parameter_value ON parameter_value.ID = product_parameter_value.parameter_value_ID";
    $result = $mysqli -> query($query);
    return $result;
}
    ?>
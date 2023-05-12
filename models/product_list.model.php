<?php
require('../utils/php/config.php');

function get_products($sorting_mode,$offset,$boundary,$category,$manufacturer,$colors,$grid_values,$range,$price_range){ 
  global $mysqli;
  $imploded_colors =implode(',', $colors);
  $imploded_grid =implode(',', $grid_values);
  // $count_query = $mysqli -> query("SELECT count(ID) from product");
  // $count_result = $count_query->fetch_assoc();
  // $count = $count_result["count(ID)"];
  // $items_per_page = 12;
  //  $math = is_float(is_numeric($count) / 12);
  //  $page = ceil($math);
  // $offset = ($page - 1) * $items_per_page;
  $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price,
  product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name 
  FROM product JOIN delivery ON delivery.ID = product.delivery_ID 
    JOIN product_filter_value ON product_filter_value.product_ID = product.ID
    JOIN filter_value ON filter_value.ID = product_filter_value.filter_value_ID
    JOIN filter ON filter.ID = filter_value.ID_filter
    JOIN product_category ON product_category.product_ID = product.ID
    JOIN category ON category.ID = product_category.category_ID
    JOIN product_manufacturer ON product_manufacturer.product_ID = product.ID
    JOIN manufacturer ON manufacturer.ID = product_manufacturer.manufacturer_ID
    LEFT JOIN product_flag ON product_flag.product_ID = product.ID
    LEFT JOIN flag ON product_flag.flag_ID = flag.ID
    LEFT JOIN product_image ON product_image.product_ID = product.ID 
      WHERE category.ID = ? AND manufacturer.ID = ? AND (filter.type = 'color' AND filter_value.ID IN (?))
      OR (filter.type = 'grid_multiple' AND filter_value.ID IN (?)) AND product.visible = true AND product.stock > 0
        ORDER BY $sorting_mode LIMIT ?, ?";
  $result= $mysqli->execute_query($query, [$category, $manufacturer, $imploded_colors, $imploded_grid, $offset, $boundary]);
  return $result;
}


function get_categories($curr_category){
  global $mysqli;
  $query = "SELECT category.ID, category.name, category.image_name, category.description, 
  (category.ID = ?) as is_current from category WHERE level=1";

  $result= $mysqli -> execute_query($query, [$curr_category]);
  return $result;
}

function get_filters(){
  global $mysqli;
  $query = "SELECT filter.name, filter.type, filter.ID, filter_value.value FROM 
  filter JOIN filter_value ON filter_value.ID_filter = filter.ID";
  $result= $mysqli->query($query);
  return $result;
}

?>
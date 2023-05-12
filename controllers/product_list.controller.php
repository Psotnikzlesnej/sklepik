<?php
include_once(__DIR__ . '/../models/product_list.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

function compute_filters(){
  $filters_result = get_filters();
  while ($filter = $filters_result->fetch_assoc()) {
    print_r($filter);
    // array_push($products, $featured_product);
    echo '<br>';
  }
}

compute_filters();
?>
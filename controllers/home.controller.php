<?php
include_once(__DIR__ . '/../models/home.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

function process_featured(){
  $featured_ID_array = [];
  $featured_ID_result = get_featured_ID();
  while ($featured_ID_row = $featured_ID_result->fetch_assoc()) {
    $featured_ID = $featured_ID_row['ID'];
    array_push($featured_ID_array, $featured_ID);
  }

  $products = [];
  $featured_products_result = get_certain_products($featured_ID_array);
  while ($featured_product = $featured_products_result->fetch_assoc()) {
    array_push($products, $featured_product);
  }

  $masher = new ProductMasher($products);
  $mashed_products = $masher->mashWrapper('multiple');

  return $mashed_products;
}

function process_banners(){
  $banners_sorted = ['home_top' => [], 'home_tile'  => [], 'home_bottom'  => []];
  $banners = get_home_banners();
  while ($banner = $banners->fetch_assoc()) {
    $type = $banner['type'];
    array_push($banners_sorted[$type], $banner);
  }
  return $banners_sorted;
}

?>
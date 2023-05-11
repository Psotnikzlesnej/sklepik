<?php
include_once(__DIR__ . '/../models/product.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

$url = $_GET['url'];
$splitted_url = explode("/", $url);
$id = end($splitted_url);

function process_product(){
  global $id;
  $product_variations = [];
  $products_result = get_product($id);
  while ($product_variation = $products_result->fetch_assoc()) {
    array_push($product_variations, $product_variation);
  }

  $masher = new ProductMasher($product_variations);
  $mashed_product = $masher->mashWrapper('one');

  return $mashed_product;
}

function process_categories(){
  global $id;
  $categories = [];
  $categories_result = get_product_categories($id);
  while ($product_variation = $products_result->fetch_assoc()) {
    array_push($product_variations, $product_variation);
  }
}

process_product();
?>
<?php
include_once(__DIR__ . '/../models/product.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

$url = $_GET['url'];
$splitted_url = explode("/", $url);
$product_ID = end($splitted_url);

function process_product(){
  global $product_ID;
  $product_variations = [];
  $products_result = get_product($product_ID);
  while ($product_variation = $products_result->fetch_assoc()) {
    array_push($product_variations, $product_variation);
  }

  $masher = new ProductMasher($product_variations);
  $mashed_product = $masher->mashWrapper('one');

  return $mashed_product;
}

function process_similar(){
  global $product_ID;
  $similar_products = [];
  $categories_result = get_product_categories($product_ID);
  while (empty($similar_products) && $category = $categories_result->fetch_assoc()) {
    $category_ID = $category['ID'];
    echo $category_ID;
    $similar_products_result = get_similar_products($category_ID, $product_ID);
    while($similar_product = $similar_products_result->fetch_assoc()){
      array_push($similar_products, $similar_product);
    }
  }

  $masher = new ProductMasher($similar_products);
  $mashed_products = $masher->mashWrapper('multiple');

  return $mashed_products;
}

  function process_variants(){
    $variants = [];
    $variant_result = get_product_variant();
    while ($variant = $variant_result->fetch_assoc())
    {
      array_push($variants, $variant);
    }
    return $variants;
}
?>
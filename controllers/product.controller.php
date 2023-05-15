<?php
include_once(__DIR__ . '/../models/product.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

$url = $_GET['url'];
$splitted_url = explode("/", $url);
$product_ID = end($splitted_url);

function process_product(){
  $product_results = get_product();
  $product = $product_results->fetch_assoc();
  return $product;
}

function process_similar(){
  $similar = [];
  $similar_result = get_similar_products();
  while ($similar_product = $similar_result->fetch_assoc())
  {
    array_push($similar_product, $similar);
  }
  return $similar;
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
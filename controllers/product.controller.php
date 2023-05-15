<?php
include_once(__DIR__ . '/../models/product.model.php');

$url = $_GET['url'];
$splitted_url = explode("/", $url);
$product_ID = end($splitted_url);

function process_product($id){
  $product_results = get_product($id);
  $product = $product_results->fetch_assoc();
  $variant_id = $product['variant_group_ID'];
  $variants = process_variants($variant_id);
  $product['variants'] = $variants;
  odrobaczanie($product);
  return $product;
}

process_product($product_ID);

function process_similar(){
  $similar = [];
  $similar_result = get_similar_products();
  while ($similar_product = $similar_result->fetch_assoc())
  {
    $similar_product[] = $similar;
  }
  return $similar;
}

function process_variants($variant_id){
  $variants = [];
  $variant_result = get_product_variant($variant_id);
  while ($variant = $variant_result->fetch_assoc())
  {
    $variants[] = $variant;
  }
  return $variants;
}
?>
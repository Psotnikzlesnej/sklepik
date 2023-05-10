<?php
include_once(__DIR__ . '/../models/home.model.php');

$mashed_products = [];
$products = [];

function compute_featured(){
  global $mashed_products;
  global $products;
  $result = get_buyable();
  while ($array = $result->fetch_assoc()) {
    array_push($products, $array);
  }
  $last_mashed_arr = array_reduce($products, "masher");
  array_push($mashed_products, $last_mashed_arr);
  $featured = array_filter($mashed_products, "featured");
  foreach($featured as $product){
    print_r($product);
      echo "<br>";
  };
}

function create_mashed_arr($attrs){
  return [
    'ID' => $attrs['ID'],
    'name' => $attrs['name'],
    'promo_price' => $attrs['promo_price'],
    'catalog_price' => $attrs['catalog_price'],
    'serial_number' => $attrs['serial_number'],
    'stock' => $attrs['stock'],
    'flags' => [$attrs['flag_name']],
    'image_name' => $attrs['image_name']
  ];
}

// prosze nie czytac, grozi zawalem!
function masher($mashed_arr, $product_arr){
  global $mashed_products;
  $is_different_product = (isset($mashed_arr) && ($mashed_arr['ID'] != $product_arr['ID']));
  if($is_different_product){
    array_push($mashed_products, $mashed_arr);
  }
  if(!isset($mashed_arr) || $is_different_product){
    $new_mashed_arr = create_mashed_arr($product_arr);
    return $new_mashed_arr;
  }
  if($product_arr['main']){
    $mashed_arr['main'] = true;
    $mashed_arr['image_name'] = $image_name;
  }
  $is_new_flag = !in_array($product_arr['flag_name'], $mashed_arr['flags']);
  if($is_new_flag){
    array_push($mashed_arr['flags'], $product_arr['flag_name']);
  }
  return $mashed_arr;
}

function featured($arr){
  return in_array('featured', $arr['flags']);
}

compute_featured();

?>
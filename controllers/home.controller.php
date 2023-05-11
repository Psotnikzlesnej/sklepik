<?php
include_once(__DIR__ . '/../models/home.model.php');

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
  $mashed_products = $masher->mashWrapper();

  return $mashed_products;
}

class ProductMasher {

  function __construct($arr){
    $this->initial_arr = $arr;
    $this->mashed_arr = [];
  }

  public function mashWrapper(){
    $last_mashed_arr = array_reduce($this->initial_arr, [$this, 'mash']);
    array_push($this->mashed_arr, $last_mashed_arr);
    return $this->mashed_arr;
  }

  private function createMashedArr($attrs){
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

  private function mash($mashed_arr, $product_arr){
    $is_different_product = (isset($mashed_arr) && ($mashed_arr['ID'] != $product_arr['ID']));
  
    if($is_different_product){
      array_push($this->mashed_arr, $mashed_arr);
    }
    if(!isset($mashed_arr) || $is_different_product){
      $new_mashed_arr = $this->createMashedArr($product_arr);
      return $new_mashed_arr;
    }
  
    if($product_arr['main']){
      $mashed_arr['main'] = true;
      $mashed_arr['image_name'] = $product_arr['image_name'];
    }
  
    $is_new_flag = !in_array($product_arr['flag_name'], $mashed_arr['flags']);
    if($is_new_flag){
      array_push($mashed_arr['flags'], $product_arr['flag_name']);
    }
  
    return $mashed_arr;
  }

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
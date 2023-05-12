<?php
abstract class Masher {
  function __construct($arr){
    $this->initial_arr = $arr;
    $this->mashed_arr = [];
  }

}

class FilterMasher extends Masher {
  function __construct($arr){
    parent::__construct($arr);
  }

  public function mashWrapper(){
    $last_mashed_arr = array_reduce($this->initial_arr, [$this, 'mashMultiple']);
    array_push($this->mashed_arr, $last_mashed_arr);
    return $this->mashed_arr;
  }

  private function mashMultiple($mashed_arr, $filter_arr){
    $is_different_filter = (isset($mashed_arr) && ($mashed_arr['ID'] != $filter_arr['ID']));
  
    if($is_different_filter){
      array_push($this->mashed_arr, $mashed_arr);
    }
    if(!isset($mashed_arr) || $is_different_filter){
      $new_mashed_arr = [
        'ID' => $filter_arr['ID'],
        'name' => $filter_arr['name'],
        'type' => $filter_arr['type'],
        'values' => [$filter_arr['value']]
      ];
      return $new_mashed_arr;
    }
  
    array_push($mashed_arr['values'], $filter_arr['value']);
  
    return $mashed_arr;
  }
}

class ProductMasher extends Masher {
  function __construct($arr){
    parent::__construct($arr);
  }

  public function mashWrapper($type){
    if($type == 'multiple'){
      $last_mashed_arr = array_reduce($this->initial_arr, [$this, 'mashMultiple']);
      array_push($this->mashed_arr, $last_mashed_arr);
      return $this->mashed_arr;
    }
    $last_mashed_arr = array_reduce($this->initial_arr, [$this, 'mashOne']);
    return $last_mashed_arr;
  }

  private function mashOne($mashed_arr, $product_arr) {
    if(!isset($mashed_arr)){
      $mashed_arr = [
        'ID' => $product_arr['ID'],
        'name' => $product_arr['name'],
        'promo_price' => $product_arr['promo_price'],
        'catalog_price' => $product_arr['catalog_price'],
        'serial_number' => $product_arr['serial_number'],
        'stock' => $product_arr['stock'],
        'delivery_name' => $product_arr['delivery_name'],
        'flags' => [$product_arr['flag_name']],
        'images' => [$product_arr['image_name']],
        'details' => [$product_arr['parameter']=>$product_arr['value']],
        'manufacturer' => ['name' => $product_arr['manufacturer_name'], 'image' => $product_arr['manufacturer_image']]
      ];
      return $mashed_arr;
    }

    $is_new_flag = !in_array($product_arr['flag_name'], $mashed_arr['flags']);
    if($is_new_flag){
      array_push($mashed_arr['flags'], $product_arr['flag_name']);
    }

    $is_parameter_existing = in_array($product_arr['parameter'], $mashed_arr['details']);
    if(!$is_parameter_existing){
      $mashed_arr['details'][$product_arr['parameter']] = $product_arr['value'];
    }

    $is_image_existing = in_array($product_arr['image_name'], $mashed_arr['images']);
    if(!isset($product_arr['image_name']) || $is_image_existing){
      return $mashed_arr;
    }

    if($product_arr['main']){
      array_unshift($mashed_arr['images'], $product_arr['image_name']);
    }else{
      array_push($mashed_arr['images'], $product_arr['image_name']);
    }

    return $mashed_arr;
  }

  private function mashMultiple($mashed_arr, $product_arr){
    $is_different_product = (isset($mashed_arr) && ($mashed_arr['ID'] != $product_arr['ID']));
  
    if($is_different_product){
      array_push($this->mashed_arr, $mashed_arr);
    }
    if(!isset($mashed_arr) || $is_different_product){
      $new_mashed_arr = [
        'ID' => $product_arr['ID'],
        'name' => $product_arr['name'],
        'promo_price' => $product_arr['promo_price'],
        'catalog_price' => $product_arr['catalog_price'],
        'serial_number' => $product_arr['serial_number'],
        'stock' => $product_arr['stock'],
        'flags' => [$product_arr['flag_name']],
        'image_name' => $product_arr['image_name']
      ];
      return $new_mashed_arr;
    }
  
    if($product_arr['main']){
      $mashed_arr['image_name'] = $product_arr['image_name'];
    }
  
    $is_new_flag = !in_array($product_arr['flag_name'], $mashed_arr['flags']);
    if($is_new_flag){
      array_push($mashed_arr['flags'], $product_arr['flag_name']);
    }
  
    return $mashed_arr;
  }
}
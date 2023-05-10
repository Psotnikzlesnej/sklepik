<?php
include_once(__DIR__ . '/../models/home.model.php');

$filtered = [];
$featured_unmashed = [];
function compute_featured(){
  global $filtered;
  global $featured_unmashed;
  $result = get_featured();
  while ($array = $result->fetch_assoc()) {
    array_push($featured_unmashed, $array);
  }
  // $last_arr = array_reduce($all_featured, "masher");
  // array_push($filtered, $last_arr);
  foreach($featured_unmashed as $featured){
  print_r($featured);
    echo "<br>";
  };
}

// prosze nie czytac, grozi zawalem!
// REFACTORING IN PROGRESS
function masher($carry, $item){
  global $filtered;
  // $curr_id = $item[0];
  // $curr_name = $item[1];
  // $promo_price = $item[2];
  // $catalog_price = $item[3];
  // $serial_number = $item[4];
  // $stock = $item[5];
  // $flag = $item[6];
  // $is_main = $item[7];
  // $image_name = $item[8];
  if(!isset($carry) || $carry['id'] != $item['id']){
    $new_arr = [
      'id' => $item['id'],
      'name' => $item['name'],
      'promo_price' => $item['promo_price'],
      'catalog_price' => $item['catalog_price'],
      'serial_number' => $item['serial_number'],
      'stock' => $item['stock'],
      'flags' => [$item['flag_name']],
      'image_name' => $item['image_name']
    ];
  }else{
    if($curr_id != $prev_id){
      array_push($filtered, $carry);
      $new_arr = $item;
      $new_arr[6] = [$flag];
    }
  }
  if(!empty($carry)){
    $new_arr = $carry;
    $prev_id = $carry[0];
    if($curr_id != $prev_id){
      array_push($filtered, $carry);
      $new_arr = $item;
      $new_arr[6] = [$flag];
    }
  }
  if($is_main){
    $new_arr[7] = true;
    $new_arr[8] = $image_name;
  }
  if(!in_array($flag, $new_arr[6])){
    array_push($new_arr[6], $flag);
  }
  return $new_arr;
}

compute_featured()

?>
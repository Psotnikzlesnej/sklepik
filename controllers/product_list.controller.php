<?php
include_once(__DIR__ . '/../models/product_list.model.php');
include_once(__DIR__ . '/../utils/php/masher.php');

function compute_filters(){

  $filters = [];
  $filters_result = get_filters();
  while ($filter = $filters_result->fetch_assoc()) {
    array_push($filters, $filter);
    }
  $masher = new FilterMasher($filters);
  $mashed_filters = $masher->mashWrapper();
    echo '<pre>';
    print_r($mashed_filters);
    echo '</pre>';
  return $mashed_filters;
}

function compute_banner(){
  $banners = [];
  $banner_result = getBanner();
  while ($banner = $banner_result->fetch_assoc())
  {
    array_push($banners, $banner);
  }
  return $banners[0];
}
?>
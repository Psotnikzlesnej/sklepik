<?php
include_once(__DIR__ . '/../models/home.model.php');

function process_featured(){
  $featured = [];
  $featured_results = get_featured_products();
  while ($featured_products = $featured_results->fetch_assoc())
  {
    $featured_products[] = $featured;
  }
  return $featured;
}

function process_banners(){
  $banners_sorted = ['home_top' => [], 'home_tile'  => [], 'home_bottom'  => []];
  $banners = get_home_banners();
  while ($banner = $banners->fetch_assoc()) {
    $type = $banner['type'];
    $banners_sorted[$type][] = $banner;
  }
  return $banners_sorted;
}

?>
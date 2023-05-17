<?php
include_once(__DIR__ . '/../models/banner.model.php');
include_once(__DIR__ . '/../views/banner.view.php');

function compute_banner(){
  $banner_result = get_banner();
  $banner = $banners_result->fetch_assoc();
  return $banner;
}

?>
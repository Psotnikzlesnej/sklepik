<?php

class GalleryModel {
  function __construct(){
    global $mysqli;
    $this ->mysqli = $mysqli;
  }
  private function getHomeBanners(){
  $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_top' LIMIT 0,5";
  $result = $this ->mysqli ->query($query);
  $banners = $result -> fetch_assoc();
  return $result;
  }
  private function getHomeTiles(){
    $query = "SELECT title, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_tile'";
  $result = $this->mysqli ->query($query);
  $tiles = $result -> fetch_assoc();
  return $result;
  }

  public function get_everything(){
   $tiles = $this -> getHomeTiles();
   $banners = $this -> getHomeBanners();
   return ['home_tile' => $tiles , 'home_top' => $banners];
  }
}
?>
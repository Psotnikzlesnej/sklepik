<?php
namespace Gallery;

class Model {
  function __construct(){
    global $mysqli;
    $this ->mysqli = $mysqli;
  }
  private function getHomeBanners(){
    $banners = [];
  $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_top' LIMIT 0,5";
  $result = $this ->mysqli ->query($query);
  while($banner = $result -> fetch_assoc()){
    $banners[] = $banner;
  }
  return $banners;
  }
  private function getHomeTiles(){
    $tiles = [];
    $query = "SELECT title, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_tile'";
  $result = $this->mysqli ->query($query);
  while($tile = $result -> fetch_assoc()){
    $tiles[] = $tile;
  }
  return $tiles;
  }

  public function getEverything(){
   $tiles = $this -> getHomeTiles();
   $banners = $this -> getHomeBanners();
   return ['home_tiles' => $tiles , 'home_top' => $banners];
  }
}
?>
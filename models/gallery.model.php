<?php

class GalleryModel {
  function _construct(){
    global $mysqli;
    $this ->mysqli = $mysqli;
  }
  private function get_home_banners(){
  $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_top'";
  $result = $this ->mysqli ->query($query);
  $banners = $result -> fetch_assoc();
  return $result;
  }
  private function get_home_tiles(){
    $query = "SELECT title, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_tile'";
  $result = $this->mysqli ->query($query);
  $tiles = $result -> fetch_assoc();
  return $result;
  }

  public function get_everything(){
   $tiles = $this -> get_home_tiles();
   $banners = $this -> get_home_banners();
   return ['home_tile' => $tiles , 'home_top' => $banners];
  }
}
?>
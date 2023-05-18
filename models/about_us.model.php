<?php
class featuredModel {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
  }
private function get_about_us(){
    $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
    WHERE visible=true AND type = 'home_bottom'";
    $result = $this->mysqli->query($query);
    $about_us = $result -> fetch_assoc();
    return $result;
  }
public function get_everything(){
  $about_us = $this->get_about_us();
  return $about_us;
}
}
?>
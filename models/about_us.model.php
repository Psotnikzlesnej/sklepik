<?php
namespace AboutUs;
class Model {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
  }
private function getAboutUs(){
    $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
    WHERE visible=true AND type = 'home_bottom'";
    $result = $this->mysqli->query($query);
    $about_us = $result -> fetch_assoc();
    return $result;
  }
public function getEverything(){
  $about_us = $this->getAboutUs();
  return ['about_us' => $about_us];
}
}
?>
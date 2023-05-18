<?php
function get_home_banners(){
  global $mysqli;
  $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_top'";
  $result = $mysqli->query($query);
  return $result;
}

function get_home_tiles(){
  global $mysqli;
  $query = "SELECT title, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type = 'home_tile'";
  $result = $mysqli->query($query);
  return $result;
}
?>
<?php
function get_banner(){
  global $mysqli;
  $query = "SELECT title, description, image_name, link, visible, type, alt, mask from banner where type='store' and visible='1';";
  $result = $mysqli->query($query);
  return $result;
}

?>
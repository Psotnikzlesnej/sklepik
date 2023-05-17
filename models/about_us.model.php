<?php
function get_about_us(){
    global $mysqli;
    $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
    WHERE visible=true AND type = 'home_bottom'";
    $result = $mysqli->query($query);
    return $result;
  }
?>
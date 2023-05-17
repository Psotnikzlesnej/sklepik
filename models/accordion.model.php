<?php
function get_categories($category_id){
  global $mysqli;
  $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current, parent, level from category;";
  $result= $mysqli -> execute_query($query, [$category_id]);
  return $result;
}
?>
<?php
function get_categories($categroy_id){
  global $mysqli;
  $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current, parent, level from category;";
  $result= $mysqli -> execute_query($query, [$categroy_id]);
  return $result;
}
?>
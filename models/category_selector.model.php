<?php
function get_categories($categroy_id, $parent_id){
  global $mysqli;
  $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current 
  from category WHERE parent = ?;";
  $result= $mysqli -> execute_query($query, [$categroy_id, $parent_id]);
  return $result;
}

function get_parent_id($categroy_id){
  global $mysqli;
  $query = "SELECT parent from category WHERE ID = ?;";
  $result = $mysqli -> execute_query($query, [$categroy_id]);
  return $result;
}

?>
<?php
function get_description($category_id){
  global $mysqli;
  $query = "SELECT name, description from category WHERE ID = ?;";
  $result= $mysqli -> execute_query($query, [$category_id]);
  return $result;
}

?>
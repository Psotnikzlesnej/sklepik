<?php
function get_description($curr_category){
  global $mysqli;
  $query = "SELECT name, description from category WHERE ID = ?;";
  $result= $mysqli -> execute_query($query, [$curr_category]);
  return $result;
}

?>
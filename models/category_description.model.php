<?php
class CategoryDescriptionModel {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->id = $GLOBALS['catalog_id'] ?? null;
  }

  private function get_description(){
    $query = "SELECT name, description from category WHERE ID = ?;";
    $result= $this->mysqli->execute_query($query, [$this->id]);
    $description = $result->fetch_assoc();
    return $result;
  }

  public function get_everything(){
    $description = $this->get_description();
    return $description;
  }
}
?>
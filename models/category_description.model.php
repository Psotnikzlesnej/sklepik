<?php
class CategoryDescriptionModel {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->id = $GLOBALS['catalog_id'] ?? null;
  }

  private function getDescription(){
    $query = "SELECT name, description from category WHERE ID = ?;";
    $result= $this->mysqli->execute_query($query, [$this->id]);
    $description = $result->fetch_assoc();
    return $result;
  }

  public function getEverything(){
    $description = $this->getDescription();
    return ['description' => $description];
  }
}
?>
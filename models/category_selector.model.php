<?php
namespace CategorySelector;
class Model {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->id = $GLOBALS['catalog_id'] ?? null;
  }

  private function getCategories($parent_id){
    $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current 
    from category WHERE parent = ?;";
    $result= $this->mysqli -> execute_query($query, [$this->id, $parent_id['parent']]);
    $categories = [];
    while ($category = $result->fetch_assoc())
    {
      $categories[] = $category;
    }
    return $categories;
  }
  
  private function getParentId(){
    $query = "SELECT parent from category WHERE ID = ?;";
    $result = $this->mysqli->execute_query($query, [$this->id]);
    $parent = $result->fetch_assoc();
    return $parent;
  }

  public function getEverything(){
    $parent_id = $this->getParentId();
    $categories = $this->getCategories($parent_id);
    return ['categories' => $categories];
  }
}
?>
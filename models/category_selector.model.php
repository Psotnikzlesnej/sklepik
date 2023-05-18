<?php
class CategorySelectorModel {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->id = $GLOBALS['catalog_id'] ?? null;
  }

  private function get_categories($parent_id){
    $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current 
    from category WHERE parent = ?;";
    $result= $mysqli -> execute_query($query, [$this->id, $parent_id]);
    $categories = [];
    while ($category = $result->fetch_assoc())
    {
      $categories[] = $category;
    }
    return $categories;
  }
  
  private function get_parent_id(){
    $query = "SELECT parent from category WHERE ID = ?;";
    $result = $this->mysqli->execute_query($query, [$this->id]);
    $parent = $result->fetch_assoc();
    return $parent;
  }

  public function get_everything(){
    $parent_id = $this->get_parent_id();
    $categories = $this->get_categories($parent_id);
    return $categories;
  }
}
?>
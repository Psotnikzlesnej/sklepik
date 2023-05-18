<?php

class SidebarModel {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->category = $GLOBALS['catalog_id'] ?? '';
    $this->manufacturer = $GLOBALS['query_m'] ?? '';
    $this->colors = $GLOBALS['query_c'] ?? '';
    $this->min_price = $GLOBALS['query_min'] ?? '';
    $this->max_price = $GLOBALS['query_max'] ?? '';
  }

  //zajebane ze stacka https://stackoverflow.com/a/10332361
  private function createTree(&$list, $parent){
    $tree = [];
    foreach ($parent as $k=>$l){
      if(isset($list[$l['ID']])){
        $l['children'] = createTree($list, $list[$l['ID']]);
      }
      $tree[] = $l;
    } 
    return $tree;
  }

  private function getCategories(){
    $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current, parent, level from category;";
    $result= $this->$mysqli->execute_query($query, [$this->category]);
    $categories_sorted_by_parent = [];
    while ($category = $result->fetch_assoc())
    {
      $parent_ID = $category['parent'];
      $categories_sorted_by_parent[$parent_ID][] = $category;
    }
    $category_tree = createTree($categories_sorted_by_parent, $categories_sorted_by_parent[null]);
    return $category_tree;
  }

  private function getColors(){
    $query = "SELECT filter.name, filter.type, filter_value.value, filter_value.id as value_ID,
     (filter_value.id in (?)) as is_selected FROM filter JOIN filter_value
      ON filter_value.ID_filter = filter.ID WHERE type = 'color';";
    $result = $this->mysqli->execute_query($query, [$this->colors]);
    $colors = [];
    while ($color = $result->fetch_assoc())
    {
      $colors[] = $color;
    }
    return $colors;
  }

  private function getManufacturers(){
    $query = "SELECT ID, name FROM manufacturer";
    $result = $this->mysqli->execute_query($query);
    $manufacturers = [];
    while ($manufacturer = $result->fetch_assoc())
    {
      $manufacturers[] = $manufacturer;
    }
    return $manufacturers;
  }

  public function getEverything(){
    $colors = $this->get_colors();
    $manufacturers = $this->getManufacturers();
    $category_tree = $this->getCategories();
    return ['colors' => $colors, 'manufacturers' => $manufacturers, 'categories'=>$category_tree, 
    'price_range'=>['from'=>$this->min_price, 'to'=>$this->max_price]];
  }
}

?>
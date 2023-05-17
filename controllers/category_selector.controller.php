<?php 
include_once(__DIR__ . '/../models/category_selector.model.php');
include_once(__DIR__ . '/../views/category_selector.component.php');

function process_categories(){
  $id = $GLOBALS['catalog_id'] ?? null;
  $parent_result = get_parent_id($id);
  $parent_ID = $parent_result->fetch_assoc()['parent'];
  $categories_result = get_categories($id, $parent_ID);
  $categories = [];
  while ($category = $categories_result->fetch_assoc())
  {
    $categories[] = $category;
  }
  return $categories;
}
?>
<?php
include_once(__DIR__ . '/../models/accordion.model.php');
include_once(__DIR__ . '/../components/accordion.component.php');

//zajebane ze stacka https://stackoverflow.com/a/10332361
function createTree(&$list, $parent){
  $tree = [];
  foreach ($parent as $k=>$l){
    if(isset($list[$l['ID']])){
      $l['children'] = createTree($list, $list[$l['ID']]);
    }
    $tree[] = $l;
  } 
  return $tree;
}

include_once(__DIR__ . '/../models/color_selector.model.php');
include_once(__DIR__ . '/../components/color_selector.component.php');

function process_colors(){
  $colors = $GLOBALS['query_colors'] ?? null;
  $colors_result = get_colors($colors);
  $colors = [];
  while ($color = $colors_result->fetch_assoc())
  {
    $colors[] = $category;
  }
  return $colors;
}

function process_categories(){
  $id = $GLOBALS['catalog_id'] ?? null;
  $categories_result = get_categories($id);
  while ($category = $categories_result->fetch_assoc())
  {
    $parent_ID = $category['parent'];
    $categories_sorted_by_parent[$parent_ID][] = $category;
  }
  $category_tree = createTree($categories_sorted_by_parent, $categories_sorted_by_parent[null]);
  return $category_tree;
}
?>
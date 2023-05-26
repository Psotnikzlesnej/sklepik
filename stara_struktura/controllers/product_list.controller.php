<?php
include_once(__DIR__ . '/../models/product_list.model.php');

function compute_products(){
  $products = [];
  $products_result = get_products();
  while ($product = $products_result->fetch_assoc())
  {
    $products[] = $product;
  }
  return $products;
}

function compute_filters(){
  $filters = [];
  $filters_result = get_filters();
  while ($filter = $filters_result->fetch_assoc())
  {
    $filters[] = $filter;
  }
  return $filters;
}

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

function compute_categories(){
  $categories_sorted_by_parent = [];
  $categories_result = get_categories(1);
  while ($category = $categories_result->fetch_assoc())
  {
    $parent_ID = $category['parent'];
    $categories_sorted_by_parent[$parent_ID][] = $category;
  }
  $category_tree = createTree($categories_sorted_by_parent, $categories_sorted_by_parent[null]);
  return $category_tree;
}

function compute_banner(){
  $banners_result = getBanner();
  $banner = $banners_result->fetch_assoc();
  return $banner;
}
?>
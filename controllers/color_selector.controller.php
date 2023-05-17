<?php 
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
?>
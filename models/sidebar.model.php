<?php 
function get_categories($category_id){
  global $mysqli;
  $query = "SELECT ID, name, image_name, description, (ID = ?) as is_current, parent, level from category;";
  $result= $mysqli -> execute_query($query, [$category_id]);
  return $result;
}

include_once(__DIR__ . '/../models/color_selector.model.php');
include_once(__DIR__ . '/../components/color_selector.component.php');

function get_colors($selected){
  global $mysqli;
  $query = "SELECT filter.name, filter.type, filter_value.value, filter_value.id as value_ID,
   (filter_value.id in (?)) as is_selected FROM filter JOIN filter_value
    ON filter_value.ID_filter = filter.ID WHERE type = 'color';";
  $result = $mysqli -> execute_query($query, [$selected]);
  return $result;
}

function get_price_range($selected){
  global $mysqli;
  $query = "SELECT filter.name, filter.type, filter_value.value, filter_value.id as value_ID FROM filter JOIN filter_value
    ON filter_value.ID_filter = filter.ID WHERE type = 'slider' order by filter_value.value;";
  $result = $mysqli -> execute_query($query, [$selected]);
  return $result;
}
?>
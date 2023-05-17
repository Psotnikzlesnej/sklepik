<?php
function get_colors($selected){
  global $mysqli;
  $query = "SELECT filter.name, filter.type, filter_value.value, filter_value.id as value_ID,
   (filter_value.id in (?)) as is_selected FROM filter JOIN filter_value
    ON filter_value.ID_filter = filter.ID WHERE type = 'color';";
  $result = $mysqli -> execute_query($query, [$selected]);
  return $result;
}
?>
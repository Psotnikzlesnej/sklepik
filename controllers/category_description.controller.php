<?php
include_once(__DIR__ . '/../models/category_description.model.php');
include_once(__DIR__ . '/../views/category_description.view.php');

function compute_description(){
  $id = $GLOBALS['catalog_id'] ?? null;
  $description_result = get_description($id);
  $description = $description_result->fetch_assoc();
  return $description;
}
?>
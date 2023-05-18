<?php
class featuredModel {
  function _construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
  }
  private function get_featured_products(){
  $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
  GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names,
  (select p_i.image_name from product_image as p_i 
    where p_i.product_ID = p.ID ORDER BY p_i.main DESC LIMIT 1) as image_name 
  FROM product as p 
    JOIN product_flag as p_f on p_f.product_ID = p.ID JOIN flag as f on p_f.flag_ID = f.ID 
      WHERE p.visible = true AND p.stock > 0 GROUP BY p.ID HAVING flag_names LIKE '%featured%';";
  $result = $this->mysqli ->query($query);
  $featured = $result -> featch_assoc();
  return $result;
}
  public function get_everything(){
    $featured = $this->get_featured_products();
    return $featured;
  }
}
?>
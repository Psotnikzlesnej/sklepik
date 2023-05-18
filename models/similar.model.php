<?php
class ProductSimilarModel{
  function __construct(){
global $mysqli;
$this ->mysqli = $mysqli;
$this->id = $GLOBALS['product_id'] ?? null;
}

private function getProductCategories(){
	$query = "SELECT c.ID FROM `product` as p
		JOIN `product_category` as p_c on p_c.product_ID = p.ID
		JOIN `category` as c on p_c.category_ID = c.ID
			WHERE p.ID = ? ORDER BY level DESC";
	$result = $mysqli->execute_query($query, [$this->id]);
  $category = $result -> fetch_assoc();
	return $result;
}

private function getSimilarProducts($category_id){
	$query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
  GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names,
  (select p_i.image_name from product_image as p_i 
    where p_i.product_ID = p.ID ORDER BY p_i.main DESC LIMIT 1) as image_name 
  FROM product as p 
    JOIN product_flag as p_f on p_f.product_ID = p.ID JOIN flag as f on p_f.flag_ID = f.ID 
      WHERE p.visible = true AND p.stock > 0 AND c.ID=$category AND NOT p.ID = ? 
			GROUP BY p.ID;";
	$result = $mysqli->execute_query($query, [$this->id]);
  $similar_product= $result -> fetch_assoc();
	return $result;
}
public function getEverything(){
  $category = $this->getProductCategories();
  $similar_product = $this->getSimilarProducts($category);
  return ['product_category' => $category, 'similar_products' => $similar_product];
}}
?>
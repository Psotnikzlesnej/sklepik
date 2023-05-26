<?php
function get_product($id){
	global $mysqli;
	$query = "SELECT p.ID, p.name, p.variant_name, p.catalog_price, 
	p.promo_price, d.name as delivery_name, p.serial_number, p.variant_group_ID,
	GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names, 
  (select GROUP_CONCAT(DISTINCT p_i.image_name ORDER BY p_i.main DESC SEPARATOR ', ') 
		from product_image as p_i where p_i.product_ID = p.ID) as product_images,
	p.description, p.video_url, p_v.parameter, p_v.value,
	m.name as manufacturer_name, m.image_name as manufacturer_image FROM product as p
		JOIN delivery as d ON d.ID = p.delivery_ID
		JOIN product_parameter_value as p_p_v ON p_p_v.product_ID = p.ID
		JOIN parameter_value as p_v ON p_v.ID = p_p_v.parameter_value_ID
		JOIN product_manufacturer as p_m ON p_m.product_ID = p.ID
		JOIN manufacturer as m ON m.ID = p_m.manufacturer_ID
		LEFT JOIN product_flag as p_f ON p_f.product_ID = p.ID
		LEFT JOIN flag as f ON p_f.flag_ID = f.ID
			WHERE p.visible = true AND p.stock > 0 AND p.ID = ? GROUP BY p.ID;";
	$result = $this->mysqli->execute_query($query, [$id]);
	return $result;
}

function get_product_categories($id) {
	global $mysqli;
	$query = "SELECT c.ID FROM `product` as p
		JOIN `product_category` as p_c on p_c.product_ID = p.ID
		JOIN `category` as c on p_c.category_ID = c.ID
			WHERE p.ID = ? ORDER BY level DESC";
	$result = $this->mysqli->execute_query($query, [$id]);
	return $result;
}

function get_similar_products($category, $id){
	global $mysqli;
	$query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
  GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names,
  (select p_i.image_name from product_image as p_i 
    where p_i.product_ID = p.ID ORDER BY p_i.main DESC LIMIT 1) as image_name 
  FROM product as p 
    JOIN product_flag as p_f on p_f.product_ID = p.ID JOIN flag as f on p_f.flag_ID = f.ID 
      WHERE p.visible = true AND p.stock > 0 AND c.ID=$category AND NOT p.ID = ? 
			GROUP BY p.ID;";
	$result = $this->mysqli->execute_query($query, [$id]);
	return $result;
}

function get_product_variant($variant_id){
	global $mysqli;
	$query = "SELECT product.ID, product.variant_name, (select p_i.image_name from product_image as p_i 
	where p_i.product_ID = product.ID ORDER BY p_i.main DESC LIMIT 1) as image_name FROM product
	WHERE product.visible = true AND product.stock > 0 AND product.variant_group_ID =?";
	$result = $this->mysqli -> execute_query($query, [$variant_id]);
	return $result;
}
?>
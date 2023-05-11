<?php
function get_product($id){
	global $mysqli;
	$query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
		JOIN delivery ON delivery.ID = product.delivery_ID 
		JOIN product_flag ON product_flag.product_ID = product.ID
		JOIN flag ON product_flag.flag_ID = flag.ID
		JOIN product_image ON product_image.product_ID = product.ID
			WHERE product.ID = ?";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}

function get_product_description($id){
	global $mysqli;
	$query = "SELECT product.description, product.video_url, parameter_value.parameter, parameter_value.value FROM product
		JOIN product_parameter_value ON product_parameter_value.product_ID = product.ID
		JOIN parameter_value ON parameter_value.ID = product_parameter_value.parameter_value_ID
			WHERE product.ID = ?";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}

function get_product_categories($id) {
	global $mysqli;
	$query = "SELECT c.ID FROM `product` as p
		JOIN `product_category` as p_c on p_c.product_ID = p.ID
		JOIN `category` as c on p_c.category_ID = c.ID
			WHERE p.ID = ? ORDER BY level DESC";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}

function get_similar_products($category, $id){
	global $mysqli;
	$query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number,
  p.stock, f.name as flag_name, p_i.main, p_i.image_name FROM `product` as p
		JOIN `product_flag` as p_f on p_f.product_ID = p.ID
    JOIN `flag` as f on p_f.flag_ID = f.ID
		JOIN `product_category` as p_c on p_c.product_ID = p.ID
		JOIN `category` as c on p_c.category_ID = c.ID
    LEFT JOIN `product_image` as p_i on p_i.product_ID = p.ID
      WHERE p.visible = true AND p.stock > 0 AND c.ID=$category AND NOT p.ID = ? ORDER BY p.ID;";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}
?>
<?php
function get_product($id){
	global $mysqli;
	$query = "SELECT product.ID, product.name, product.stock, product.variant_name, product.catalog_price, 
	product.promo_price, delivery.name as delivery_name, product.serial_number,
	flag.name as flag_name, product_image.main, product_image.image_name,
	product.description, product.video_url, parameter_value.parameter, parameter_value.value  FROM product
		JOIN delivery ON delivery.ID = product.delivery_ID
		JOIN product_parameter_value ON product_parameter_value.product_ID = product.ID
		JOIN parameter_value ON parameter_value.ID = product_parameter_value.parameter_value_ID
		LEFT JOIN product_flag ON product_flag.product_ID = product.ID
		LEFT JOIN flag ON product_flag.flag_ID = flag.ID
		LEFT JOIN product_image ON product_image.product_ID = product.ID
			WHERE product.visible = true AND product.stock > 0 AND product.ID = ?";
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
		LEFT JOIN `product_flag` as p_f on p_f.product_ID = p.ID
    LEFT JOIN `flag` as f on p_f.flag_ID = f.ID
		JOIN `product_category` as p_c on p_c.product_ID = p.ID
		JOIN `category` as c on p_c.category_ID = c.ID
    LEFT JOIN `product_image` as p_i on p_i.product_ID = p.ID
      WHERE p.visible = true AND p.stock > 0 AND c.ID=$category AND NOT p.ID = ? ORDER BY p.ID;";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}
?>
<?php
   function get_product_offer($id){
	global $mysqli;
	$query = "SELECT p.ID, p.name, p.variant_name, p.catalog_price, 
	p.promo_price, d.name as delivery_name, p.serial_number, p.variant_group_ID,
	GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names, m.name as manufacturer_name, m.image_name as manufacturer_image FROM product as p
		JOIN delivery as d ON d.ID = p.delivery_ID
		JOIN product_manufacturer as p_m ON p_m.product_ID = p.ID
		JOIN manufacturer as m ON m.ID = p_m.manufacturer_ID
		LEFT JOIN product_flag as p_f ON p_f.product_ID = p.ID
		LEFT JOIN flag as f ON p_f.flag_ID = f.ID
			WHERE p.visible = true AND p.stock > 0 AND p.ID = ? GROUP BY p.ID;";
	$result = $mysqli->execute_query($query, [$id]);
	return $result;
}

?>
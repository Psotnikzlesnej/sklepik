<?php
	namespace Offer;
	class Model{
		function __construct(){
			global $mysqli;
			$this ->mysqli = $mysqli;
			$this->id = $GLOBALS['product_id'] ?? null;
		  }
   private function getHorizontalCarouselImage(){
	$query = "SELECT image_name FROM product_image";
	$result = $this->mysqli->query($query);
	$horizontal_carousel_image = $result -> fetch_assoc();
	return $result;
	}
	private function getVerticalCarouselImage(){
	$query = "SELECT image_name FROM product_image";
	$result = $this->mysqli->query($query);
	$vertical_carousel_image = $result -> fetch_assoc();
	return $result;
	}
 	private  function getProductOffer(){
	$query = "SELECT p.ID, p.name, p.variant_name, p.catalog_price, 
	p.promo_price, d.name as delivery_name, p.serial_number, p.variant_group_ID,
	GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names, m.name as manufacturer_name, m.image_name as manufacturer_image FROM product as p
		JOIN delivery as d ON d.ID = p.delivery_ID
		JOIN product_manufacturer as p_m ON p_m.product_ID = p.ID
		JOIN manufacturer as m ON m.ID = p_m.manufacturer_ID
		LEFT JOIN product_flag as p_f ON p_f.product_ID = p.ID
		LEFT JOIN flag as f ON p_f.flag_ID = f.ID
			WHERE p.visible = true AND p.stock > 0 AND p.ID = ? GROUP BY p.ID;";
	$result = $this->mysqli->execute_query($query, [$this->id]);
	$product_offer = $result -> fetch_assoc();
	return $product_offer;
}
	public function getEverything(){
		$horizontal_carousel_image = $this -> getHorizontalCarouselImage();
		$vertical_carousel_image = $this -> getVerticalCarouselImage();
		$product_offer = $this-> getProductOffer();
		return ['horizontal_carousel_image' => $horizontal_carousel_image , 'vertical_carousel_image' => $vertical_carousel_image , 'product_offer' => $product_offer];
	}
	}
?>
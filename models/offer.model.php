<?php
	namespace Offer;
	class Model{
		function __construct(){
			global $mysqli;
			$this ->mysqli = $mysqli;
			$this->id = $GLOBALS['product_id'] ?? null;
			
		  }
   private function getHorizontalCarouselImage(){
	$horizontal_carousel_image = [];
	$query = "SELECT image_name FROM product_image WHERE product_ID= ? ORDER BY main desc";
	$result = $this->mysqli->execute_query($query, [$this->id]);
	while ($horizontal = $result->fetch_assoc())
    {
      $horizontal_carousel_image[] = $horizontal;
    }
	return $horizontal_carousel_image;
	}

	
	private function getVerticalCarouselImage(){
	$vertical_carousel_image = [];
	$query = "SELECT image_name FROM product_image WHERE product_ID= ?";
	$result = $this->mysqli->execute_query($query, [$this->id]);
	while ($vertical = $result->fetch_assoc())
    {
      $vertical_carousel_image[] = $vertical;
    }
	return $vertical_carousel_image;
	}

 	private  function getProductOffer(){
	$query = "SELECT p.ID, p.name, p.variant_name, p.catalog_price, 
	p.promo_price, d.name as delivery_name, p.serial_number as serial_number, p.variant_group_ID,
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
		$horizontal = $this -> getHorizontalCarouselImage();
		$vertical = $this -> getVerticalCarouselImage();
		$product_offer = $this-> getProductOffer();
		return ['horizontal' => $horizontal, 'vertical' => $vertical, 'product_offer' => $product_offer];
	}
	}
?>
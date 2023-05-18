<?php

    class get_product_descriptionModel{
        function _construct(){
			global $mysqli;
			$this ->mysqli = $mysqli;
			$this->id = $GLOBALS['product_id'] ?? null;
		  }
    private function get_product_description(){
    $query = "SELECT description, video_url FROM product";
    $result = $this->mysqli->query($query);
    $product_description = $result -> fetch_assoc();
    return $result;
     }
    public function get_everything(){
        $product_description = $this->get_product_description();
        return $product_description;
    }
     }
?>
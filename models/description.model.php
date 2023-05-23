<?php
 namespace ProductDescription;
    class Model{
        function __construct(){
			global $mysqli;
			$this ->mysqli = $mysqli;
			$this->id = $GLOBALS['product_id'] ?? null;
		  }
    private function getProductDescription(){
    $query = "SELECT description, video_url FROM product";
    $result = $this->mysqli->query($query);
    $product_description = $result -> fetch_assoc();
    return $result;
     }
    public function getEverything(){
        $product_description = $this->getProductDescription();
        return ['product_description' => $product_description];
    }
     }
?>
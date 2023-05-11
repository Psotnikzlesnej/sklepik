<?php
    require('../utils/php/config.php');

    function getProducts(){    
    $count_query = $mysqli -> query("SELECT count(ID) from product");
    $count_result = $count_query->fetch_assoc();
    $count = $count_result["count(ID)"];
    $items_per_page = 12;
     $math = is_float(is_numeric($count) / 12);
     $page = ceil($math);
    $offset = ($page - 1) * $items_per_page;
     $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
     JOIN delivery ON delivery.ID = product.delivery_ID 
     JOIN product_flag ON product_flag.product_ID = product.ID
     JOIN flag ON product_flag.flag_ID = flag.ID
     LEFT JOIN product_image ON product_image.product_ID = product.ID LIMIT ". $offset . ",". $items_per_page ."";

      $result= $mysqli -> query($query);
      while ($array = $result->fetch_assoc()) {
        print_r($array);
        echo '<br>';
      }
     return $result;
    }


function getCategory(){

$select_category =  "SELECT banner.title, banner.description,banner.image_name,banner.link,banner.visible,banner.type,banner.alt,banner.mask,category.ID , category.name , category.image_name , category.description from category JOIN banner ON category.ID = banner.ID where level='1'";

$select_category_result= $mysqli -> query($select_category);

if (mysqli_num_rows($select_category_result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($select_category_result)) {
    echo "id: " . $row["ID"]. "  <br>";
    echo "title: " . $row["title"]. "  <br>";
    echo "des: " . $row["description"]. "  <br>";
    echo "in: " . $row["image_name"]. "  <br>";
    echo "link: " . $row["link"]. "  <br>";
    echo "vis: " . $row["visible"]. "  <br>";
    echo "alt: " . $row["alt"]. "  <br>";
    echo "mask: " . $row["mask"]. "  <br>";
    echo "name: " . $row["name"]. "  <br>";
  }
} else {
  echo "0 results";
}

}

function getFilters(){
  $query = "SELECT filter.name, filter.type, filter.ID, filter_value.value  FROM filter
  JOIN filter_value ON filter_value.ID_filter = filter.ID";
}
?>
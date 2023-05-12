<?php
    require('../utils/php/config.php');

    function getProduct($sorting_mode,$offset,$boundary,$category,$manufacturer,$colors,$grid_values,$range,$price_range){ 
    $imploded_colors =implode(',', $colors) ;  
    $imploded_grid =implode(',', $grid_values) ; 
    // $count_query = $mysqli -> query("SELECT count(ID) from product");
    // $count_result = $count_query->fetch_assoc();
    // $count = $count_result["count(ID)"];
    // $items_per_page = 12;
    //  $math = is_float(is_numeric($count) / 12);
    //  $page = ceil($math);
    // $offset = ($page - 1) * $items_per_page;
     $query = "SELECT product.name, product.stock, product.variant_name, product.catalog_price, product.promo_price, product.delivery_ID, delivery.name, flag.name, product_image.image_name FROM product
     JOIN delivery ON delivery.ID = product.delivery_ID 
     JOIN product_filter_value ON product_filter_value.product_ID = product.ID
     JOIN filter_value ON filter_value.ID = product_filter_value.filter_value_ID
     JOIN filter ON filter.ID = filter_value.ID_filter
     JOIN product_category ON product_category.product_ID = product.ID
     JOIN category ON category.ID = product_category.category_ID
     JOIN product_manufacturer ON product_manufacturer.product_ID = product.ID
     JOIN manufacturer ON manufacturer.ID = product_manufacturer.manufacturer_ID
     LEFT JOIN product_flag ON product_flag.product_ID = product.ID
     LEFT JOIN flag ON product_flag.flag_ID = flag.ID
     LEFT JOIN product_image ON product_image.product_ID = product.ID 
     WHERE category.ID = $category AND manufacturer.ID = $manufacturer AND (filter.type = 'color' AND filter_value.ID IN ($imploded_colors))
     OR (filter.type = 'grid_multiple' AND filter_value.ID IN ($imploded_grid)) AND product.visible = true AND product.stock > 0
     ORDER BY $sorting_mode
     LIMIT $offset , $boundary";

      $result= $mysqli -> query($query);
      while ($array = $result->fetch_assoc()) {
        print_r($array);
        echo '<br>';
      }
     return $result;
    }


//function getCategory(){

$select_category =  "SELECT banner.title, banner.description,banner.image_name,banner.link,banner.visible,banner.type,banner.alt,banner.mask,category.ID , category.name , category.image_name , category.description from category JOIN banner ON category.ID = banner.ID where level='1'";

$select_category_result= $mysqli -> query($select_category);

if (mysqli_num_rows($select_category_result) > 0) {
  // output data of each row
   while($row = mysqli_fetch_assoc($select_category_result)) {
   echo "<pre>";
    print_r($row);
    echo "</pre>";
  }
} else {
  echo "0 results";
}

//}

function getFilter(){
  $query = "SELECT filter.name, filter.type, filter.ID, filter_value.value  FROM filter
  JOIN filter_value ON filter_value.ID_filter = filter.ID";

   $result= $mysqli -> query($query);
   while ($array = $result->fetch_assoc()) {
     print_r($array);
     echo '<br>';
   }
  return $result;
 
}
?>
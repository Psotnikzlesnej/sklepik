<?php

function get_home_banners(){
  global $mysqli;
  $query = "SELECT title, description, image_name, link, type, alt, mask FROM `banner` 
  WHERE visible=true AND type IN ('home_top', 'home_tile', 'home_bottom')";
  $result = $mysqli->query($query);
  return $result;
}

// function get_buyable(){
//   global $mysqli;
//   $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number,
//   p.stock, f.name as flag_name, p_i.main, p_i.image_name FROM `product` as p
// 	  JOIN `product_flag` as p_f on p_f.product_ID = p.ID
//     JOIN `flag` as f on p_f.flag_ID = f.ID
//     LEFT JOIN `product_image` as p_i on p_i.product_ID = p.ID
//       WHERE p.visible = true AND p.stock > 0 ORDER BY p.ID;";
//   $result = $mysqli->query($query);
//   return $result;
// }

function get_featured_products(){
  global $mysqli;
  $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
  GROUP_CONCAT(DISTINCT f.name SEPARATOR ', ') as flag_names,
  (select p_i.image_name from product_image as p_i 
    where p_i.product_ID = p.ID ORDER BY p_i.main DESC LIMIT 1) as image_name 
  FROM product as p 
    JOIN product_flag as p_f on p_f.product_ID = p.ID JOIN flag as f on p_f.flag_ID = f.ID 
      WHERE p.visible = true AND p.stock > 0 GROUP BY p.ID HAVING flag_names LIKE '%featured%';";
  $result = $mysqli->query($query);
  return $result;
}
?>
<?php

function get_products($offset = '',$boundary = '',$category = '',$manufacturer = '',$colors = '',$grid_values = '', $min_price = '', $max_price = ''){ 
  global $mysqli;
  // $count_query = $mysqli -> query("SELECT count(ID) from product");
  // $count_result = $count_query->fetch_assoc();
  // $count = $count_result["count(ID)"];
  // $items_per_page = 12;
  //  $math = is_float(is_numeric($count) / 12);
  //  $page = ceil($math);
  // $offset = ($page - 1) * $items_per_page;
  $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
  GROUP_CONCAT(DISTINCT fl.name SEPARATOR ', ') as flag_names,
  (select p_i.main from product_image as p_i 
    where p_i.product_ID = p.ID ORDER BY p_i.main DESC LIMIT 1) as image_name,
  CONCAT('%', c.ID, c.name, '%') as category_for_like,
  IF(GROUP_CONCAT(DISTINCT fl.name SEPARATOR ', ') LIKE '%promo%', promo_price, catalog_price) as curr_price
  FROM product as p
    LEFT JOIN product_flag as p_f on p_f.product_ID = p.ID
    LEFT JOIN flag as fl on p_f.flag_ID = fl.ID 
    JOIN product_filter_value as p_f_v ON p_f_v.product_ID = p.ID
    JOIN filter_value as f_v ON f_v.ID = p_f_v.filter_value_ID
    JOIN filter as f ON f.ID = f_v.ID_filter
    JOIN product_category as p_c ON p_c.product_ID = p.ID
    JOIN category as c ON c.ID = p_c.category_ID
    JOIN product_manufacturer as p_m ON p_m.product_ID = p.ID
    JOIN manufacturer as m ON m.ID = p_m.manufacturer_ID
      WHERE (? = '' OR m.ID = ?) 
      AND (? = '' OR (f.type = 'color' AND f_v.ID IN (?)))
      AND (? = '' OR (f.type = 'grid_multiple' AND f_v.ID IN (?))
      AND p.visible = true AND p.stock > 0 GROUP BY ID
        HAVING (? = '' OR (with recursive cte (id, name, parent) as (select id, name, parent from category
          where id = ? union all select c.id, c.name, c.parent from category c 
          inner join cte on c.parent = cte.id
      ) select GROUP_CONCAT(DISTINCT id, name SEPARATOR ', ') from cte) LIKE category_for_like)
      AND (? = '' OR curr_price > ?)
      AND (? = '' OR curr_price < ?)
      	ORDER BY curr_price
        LIMIT ?, ?;";
  $result= $mysqli->execute_query($query, [$manufacturer, $manufacturer, $colors, $colors, 
  $grid, $grid, $category, $category, $min_price, $min_price, $max_price, $max_price, $offset, $boundary]);
  return $result;
}


function get_categories($curr_category){
  global $mysqli;
  $query = "SELECT ID, name, image_name, description, (ID = 1) as is_current, level from category ORDER BY level;";

  $result= $mysqli -> execute_query($query, [$curr_category]);
  return $result;
}

function get_filters(){
  global $mysqli;
  $query = "SELECT filter.name, filter.type, filter.ID, GROUP_CONCAT(DISTINCT filter_value.value SEPARATOR ', ') 
  FROM filter JOIN filter_value ON filter_value.ID_filter = filter.ID GROUP BY ID";
  $result = $mysqli->query($query);
  return $result;
}

function getBanner(){
  global $mysqli;
  $select_banner =  "SELECT id,title, description ,image_name, link,visible,type,alt,mask from banner  where type='store' and visible='1'";

  $select_banner_result= $mysqli -> query($select_banner);
  
  if (mysqli_num_rows($select_banner_result) > 0) {
     while($row = mysqli_fetch_assoc($select_banner_result)) {
    return $select_banner_result;
    }
  } else {
    echo "0 results";
  }
  
  }

?>



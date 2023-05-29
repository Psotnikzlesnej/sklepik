<?php
namespace ProductDisplay;
class Model {
  function __construct(){
    global $mysqli;
    $this->mysqli = $mysqli;
    $this->products_per_page = $GLOBALS['query_pp'] ?? 5;
    $this->page = $GLOBALS['query_p'] ?? 1;
    $this->offset = ($this->page - 1) * $this->products_per_page;
    $this->boundary = $this->page * $this->products_per_page;
    $this->category = $GLOBALS['catalog_id'] ?? '';
    $this->manufacturer = $GLOBALS['query_m'] ?? '';
    $this->colors = $GLOBALS['query_c'] ?? '';
    $this->min_price = $GLOBALS['query_min'] ?? '';
    $this->max_price = $GLOBALS['query_max'] ?? '';
    $this->display_variation = $GLOBALS['query_d'] ?? 'grid';
    $this->order_by = match($GLOBALS['query_o'] ?? ''){
      'price_asc' => 'curr_price ASC',
      'price_desc' => 'curr_price DESC',
      'name_desc' => 'name DESC',
      default => 'name ASC'
    };
  }

  private function getProducts(){
    $products = [];
    $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number, p.stock,
    GROUP_CONCAT(DISTINCT fl.name SEPARATOR ', ') as flag_names,
    (select p_i.image_name from product_image as p_i 
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
        AND p.visible = true AND p.stock > 0 GROUP BY p.ID
          HAVING (? = '' OR (with recursive cte (id, name, parent) as (select id, name, parent from category
            where id = ? union all select c.id, c.name, c.parent from category c 
            inner join cte on c.parent = cte.id
        ) select GROUP_CONCAT(DISTINCT id, name SEPARATOR ', ') from cte) LIKE category_for_like)
        AND (? = '' OR curr_price > ?)
        AND (? = '' OR curr_price < ?)
          ORDER BY {$this->order_by}
          LIMIT ?, ?;";
    $result = $this->mysqli->execute_query($query, [$this->manufacturer, $this->manufacturer, $this->colors, $this->colors, 
    $this->category, $this->category, $this->min_price, $this->min_price, $this->max_price,
    $this->max_price, $this->offset, $this->boundary]);
    while ($product = $result->fetch_assoc())
    {
      $products[] = $product;
    }
    return $products;
  }

  private function countProducts(){
    $query = "SELECT COUNT(*) as count FROM (SELECT (select p_i.image_name from product_image as p_i 
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
        AND p.visible = true AND p.stock > 0 GROUP BY p.ID
          HAVING (? = '' OR (with recursive cte (id, name, parent) as (select id, name, parent from category
            where id = ? union all select c.id, c.name, c.parent from category c 
            inner join cte on c.parent = cte.id
        ) select GROUP_CONCAT(DISTINCT id, name SEPARATOR ', ') from cte) LIKE category_for_like)
        AND (? = '' OR curr_price > ?)
        AND (? = '' OR curr_price < ?)) as xD;";
      $result = $this->mysqli->execute_query($query, [$this->manufacturer, $this->manufacturer, $this->colors, $this->colors, 
      $this->category, $this->category, $this->min_price, $this->min_price, $this->max_price,
      $this->max_price]);
      $description = $result->fetch_assoc();
      return $description;
  }

  public function getEverything(){
    $products_amount = $this->countProducts()['count'];
    if($products_amount <= $this->offset){
      $_GET['p'] = 1;
      $this->page = 1;
      $this->offset = ($this->page - 1) * $this->products_per_page;
      $this->boundary = $this->page * $this->products_per_page;
    }
    $products = $this->getProducts();
    $pages_amount = ceil($products_amount/$this->products_per_page);
    return ['products'=>$products, 'display_variation'=>$this->display_variation,
      'curr_page'=>$this->page, 'pages_amount'=>$pages_amount];
  }
}
?>
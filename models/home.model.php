<?php

function get_top_banners(){
  $query = "SELECT * FROM `banner` WHERE visible=true AND type=home_top";
  $result = $mysqli->execute_query($query);
  return $result;
}

function get_tiles(){
  $query = "SELECT * FROM `banner` WHERE visible=true AND type=home_tile";
  $result = $mysqli->execute_query($query);
  return $result;
}

function get_bottom_banner(){
  $query = "SELECT * FROM `banner` WHERE visible=true AND type=home_bottom";
  $result = $mysqli->execute_query($query);
  return $result;
}

function get_featured(){
  global $mysqli;
  $query = "SELECT p.ID, p.name, p.promo_price, p.catalog_price, p.serial_number,
  p.stock, f.name as flag_name, p_i.main, p_i.image_name FROM `product` as p
	  JOIN `product_flag` as p_f on p_f.product_ID = p.ID
    JOIN `flag` as f on p_f.flag_ID = f.ID
    JOIN `product_image` as p_i on p_i.product_ID = p.ID
      WHERE p.visible = true AND p.stock > 0;";
  //trzeba potem polaczyc te rowy, bo moze byc kilka flag i trzeba sprawdzic czy istnieje main obrazek, czy trzeba dac inny, albo jakis placeholder
  $result = $mysqli->execute_query($query);
  return $result;
}

// SELECT * FROM `banner` WHERE visible=true AND type=home_top
?>
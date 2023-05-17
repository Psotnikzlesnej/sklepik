<?php 
include_once(__DIR__ . '/utils/php/error_handling.php'); 
include_once(__DIR__ . '/utils/php/config.php'); 
include_once(__DIR__ . '/utils/php/debug.php'); 
$url = isset($_GET['url']) ? $_GET['url'] : 'index.php';
$splitted_url = explode("/", $url);
$layout_determiner = $splitted_url[0];
switch($layout_determiner){
  case 'index.php':
    include_once(__DIR__ . '/views/home/index.php');
    break;
  case 'catalog':
    include_once(__DIR__ . '/views/product_list/index.php');
    break;
  case 'product':
    include_once(__DIR__ . '/views/product/index.php');
    break;
  default:
    include_once(__DIR__ . '/views/not_found/index.php');
}

?>
<?php 
include_once(__DIR__ . '/utils/php/error_handling.php'); 
include_once(__DIR__ . '/utils/php/debug.php');
include_once(__DIR__ . '/utils/php/config.php');  
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$splitted_url = explode("/", $url);
$layout_determiner = $splitted_url[0];

if(isset($splitted_url[1])){
  $id = $splitted_url[1];
  $GLOBALS[$layout_determiner . '_id'] = $id;
}

$query_string = explode('?', $_SERVER['REQUEST_URI'])[1] ?? '';
$pairs = explode('&', $query_string);


foreach($pairs as $pair){
  $splitted_pair = explode('=', $pair);
  $key = $splitted_pair[0];
  $value = $splitted_pair[1] ?? '';
  $GLOBALS['query_'.$key] = $value;
}

$controller_path = __DIR__ . '/controllers/' . $layout_determiner . '.controller.php';
$not_found_path = __DIR__ . '/controllers/not_found.controller.php';

if(file_exists($controller_path)){
  include_once($controller_path);
}else{
  include_once($not_found_path);
}

?>
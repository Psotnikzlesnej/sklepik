<?php 

error_reporting(E_ALL ^ E_DEPRECATED);


$default_credentials = [
  'HOSTNAME' => 'localhost', 
  'USERNAME' => 'root', 
  'PASSWORD' => '', 
  'DATABASE' => 'sklep'
];

$env_path = __DIR__ . '/../../.env';
$credentials = file_exists($env_path) ? parse_ini_file($env_path) : $default_credentials;

$mysqli = @new mysqli(
  $credentials['HOSTNAME'], 
  $credentials['USERNAME'], 
  $credentials['PASSWORD'], 
  $credentials['DATABASE']
);


define('UTIL_ROOT', $credentials['UTIL_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/utils');
define('JS_ROOT', $credentials['JS_ROOT'] ?? '/sklepik/js');
define('CSS_ROOT', $credentials['CSS_ROOT'] ?? '/sklepik/styles');
define('TEMPLATE_ROOT', $credentials['TEMPLATE_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/templates');
define('VIEW_ROOT', $credentials['VIEW_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/views');
define('PHOTO_ROOT', $credentials['PHOTO_ROOT'] ?? '/sklepik/photos');
define('STATIC_ROOT', $credentials['STATIC_ROOT'] ?? '/sklepik/static');
define('COMPONENT_ROOT', $credentials['COMPONENT_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/components');
define('CONTROLLER_ROOT', $credentials['CONTROLLER_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/controllers');
define('MODEL_ROOT', $credentials['MODEL_ROOT'] ?? $_SERVER['DOCUMENT_ROOT'].'/sklepik/models');

$mysqli->set_charset('utf8mb4');
?>
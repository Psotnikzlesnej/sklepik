<?php 
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

$credentials['CSS_ROOT'] ?? '/sklepik/styles';
$credentials['TEMPLATE_ROOT'] ?? '/sklepik/template';
$credentials['VIEW_ROOT'] ?? '/sklepik/views';
$credentials['PHOTO_ROOT'] ?? '/sklepik/photos';
$credentials['UTIL_ROOT'] ?? '/sklepik/utils';
$credentials['STATIC_ROOT'] ?? '/sklepik/static';
$credentials['COMPONENT_ROOT'] ?? '/sklepik/components';
$credentials['CONTROLLER_ROOT'] ?? '/sklepik/controllers';
$credentials['MODEL_ROOT'] ?? '/sklepik/models';


define('JS_ROOT', $credentials['JS_ROOT'] ?? '/sklepik/js');
define('CSS_ROOT', $credentials['CSS_ROOT'] ?? '/sklepik/styles');
define('TEMPLATE_ROOT', $credentials['TEMPLATE_ROOT'] ?? '/sklepik/template');
define('VIEW_ROOT', $credentials['VIEW_ROOT'] ?? '/sklepik/views');
define('PHOTO_ROOT', $credentials['PHOTO_ROOT'] ?? '/sklepik/photos');
define('STATIC_ROOT', $credentials['STATIC_ROOT'] ?? '/sklepik/static');
define('COMPONENT_ROOT', $credentials['COMPONENT_ROOT'] ?? '/sklepik/components');
define('CONTROLLER_ROOT', $credentials['CONTROLLER_ROOT'] ?? '/sklepik/controllers');
define('MODEL_ROOT', $credentials['MODEL_ROOT'] ?? '/sklepik/models');

$mysqli->set_charset('utf8mb4');
?>
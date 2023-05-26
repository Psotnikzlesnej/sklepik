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

$root_dir = $credentials['SCRIPT_ROOT'] ?? '/sklepik';

define('SCRIPT_ROOT', $root_dir);

$mysqli->set_charset('utf8mb4');
?>
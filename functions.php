<?php 

function dd($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function abort($code) {
  http_response_code($code);
  require("views/{$code}.php");
  die();
}

function isUrl($value) { 
  return $_SERVER['REQUEST_URI'] === $value;
} 

function authorize($condition, $status = Response::FORBIDDEN) {
  if (! $condition) {

    abort($status);
    
  }
}

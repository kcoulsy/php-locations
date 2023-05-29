<?php

$request_uri = $_SERVER['REQUEST_URI'];

// remove the query string
$request_uri = explode('?', $request_uri)[0];

if (array_key_exists($request_uri, $routes)) {
  include_once $routes[$request_uri];
} else {
  http_response_code(404);
  include_once 'controllers/404.php';
  exit();
}
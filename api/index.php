<?php

header("Access-Control-Allow-Origin: *");
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

// create SQL based on HTTP method
switch ($method) {
  case 'GET':
    echo '{"message":"helloworld"}'
}
 
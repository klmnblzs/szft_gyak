<?php

spl_autoload_register(function($class) {
    require(__DIR__ . "/src/$class.php");
});

header("Content-type: application/json; charset=UTF-8");
header("Access-control-Allow-origin: *");
header("Access-control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS");

http_response_code(404);
function get_method() {
    return $_SERVER['REQUEST_METHOD'];
}


$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/", $uri);

// $parameter_list = explode("?", $uri[2]);
// $endpoint = $parameter_list[1];
// if(isset($parameter_list[1])) {
//     $parameter_data = explode("&", $parameter_list[1]);
// }

$db = new Database();
$productController = new ProductController($db);

if($uri[1] == "product") {
    switch($uri[2]) {
        case "new":
            if(get_method() == "POST") {
                http_response_code(200);
            }
            break;
        case "get":
            if(get_method() == "GET") {
                http_response_code(200);
            }
            break;
        case "update":
            if(get_method() == "PUT") {
                http_response_code(200);
            }
            break;
        case "delete":
            if(get_method() == "DELETE") {
                http_response_code(200);
            }
            break;
    }
}

?>
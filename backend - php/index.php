<?php
spl_autoload_register(function ($class) {
    require(__DIR__."/src/$class.php");
});

function get_method() {
    return $_SERVER['REQUEST_METHOD'];
}

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, DELETE, OPTIONS");

$uri = explode("/", $_SERVER['REQUEST_URI']);

if(isset($uri[2])) {
    $endpoint = $uri[2];
} else {
    echo 'invalid endpoint';
    return;
}

http_response_code(404);

$db = new Database();
$productController = new ProductController($db);

if($uri[1] == "product") {
    switch($endpoint) {
        case "get":
            if(get_method() == "GET") {
                if(isset($_GET['id'])) {
                    $productController->GetProduct($_GET['id']);
                } else {
                    http_response_code(404);
                }
            }
            break;
        case "new":
            if(get_method() == "POST") {
                $productController->CreateProduct();
            }
            break;
        case "update":
            if(get_method() == "PATCH") {
                $productController->UpdateProduct();
            }
            break;
        case "delete":
            if(get_method() == "DELETE") {
                $productController->DeleteProduct();
            }
            break;
        default:
            break;
    }
}
?>
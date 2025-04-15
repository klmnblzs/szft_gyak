<?php

class ProductController {

    private ProductModel $product;

    public function __construct(Database $db) {
        $this->product = new ProductModel($db);
    }
    function CreateProduct($name, $price, $stock) {

    }

    function DeleteProduct($id) {

    }

    function GetProduct($id) {
        http_response_code(200);
    }

    function UpdateProduct($id, $name, $price, $stock) {

    }
}

?>
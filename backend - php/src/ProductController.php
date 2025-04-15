<?php
class ProductController {
    private Product $product;

    public function __construct($db) {
        $this->product = new Product($db);
    }

    public function GetProduct($id) {
        echo json_encode($this->product->GetProduct($id));
        http_response_code(200);
    }

    public function CreateProduct() {
        $data = json_decode(file_get_contents("php://input"), true);
        if(!isset($data['name']) && !isset($data['price']) && !isset($data['stock'])) {
            return http_response_code(415);
        }

        $req = $this->product->CreateProduct($data['name'], $data['price'], $data['stock']);


        if($req > 0) {
            return http_response_code(200);
        } else {
            return http_response_code(415);
        }
    }

    public function UpdateProduct() {
        $data = json_decode(file_get_contents("php://input"), true);

        if(!isset($data['id']) & !isset($data['name']) && !isset($data['price']) && !isset($data['stock'])) {
            return http_response_code(415);
        }

        $req = $this->product->UpdateProduct($data['id'], $data['name'], $data['price'], $data['stock']);


        if($req > 0) {
            return http_response_code(200);
        } else {
            return http_response_code(404);
        }
    }

    public function DeleteProduct() {
        $data = json_decode(file_get_contents("php://input"), true);

        if(!isset($data['id'])) {
            return http_response_code(404);
        }

        $req = $this->product->DeleteProduct($data['id']);

        if($req > 0) {
            return http_response_code(200);
        } else {
            return http_response_code(404);
        }
    }
}

?>
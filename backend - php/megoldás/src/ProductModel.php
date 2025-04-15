<?php

class ProductModel {
    private $id;
    private $name;
    private $price;
    private $stock;
    private $conn;


    public function __construct(Database $db) {
        $this->conn = $db->getConnection();
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getPrice(){
		return $this->price;
	}
    public function setPrice($price){
		$this->price = $price;
	}

	public function getStock(){
		return $this->stock;
	}

	public function setStock($stock){
		$this->stock = $stock;
	}

    public function CreateProduct($name, $price, $stock) {
        $sql = "CALL CreateProduct(?,?,?)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdi", $name, $price, $stock);
        $stmt->execute();
    }

    public function DeleteProduct($id) {
        $sql = "CALL DeleteProduct(?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function GetProduct($id) {
        $sql = "CALL GetProduct(?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function UpdateProduct($id, $name, $price, $stock) {
        $sql = "CALL UpdateProduct(?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("isdi", $id, $name, $price, $stock);
        $stmt->execute();
    }
}

?>
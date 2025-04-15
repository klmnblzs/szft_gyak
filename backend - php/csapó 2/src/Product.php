<?php
class Product {
    private $id;
    private $name;
    private $price;
    private $stock;
    private $conn;

    public function __construct(Database $db) {
        $this->conn = $db->getConnection();
    }

    public function GetProduct($id) {
        $stmt = $this->conn->prepare("CALL GetProduct(:id)");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

	public function CreateProduct($name, $price, $stock) {
		$stmt = $this->conn->prepare("CALL CreateProduct(:name, :price, :stock)");
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":price", $price);
		$stmt->bindParam(":stock", $stock);
		$stmt->execute();

		$rows = $stmt->rowCount();
		return $rows;
	}

	public function UpdateProduct($id, $name, $price, $stock) {
		$stmt = $this->conn->prepare("CALL UpdateProduct(:id, :name, :price, :stock)");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":price", $price);
		$stmt->bindParam(":stock", $stock);
		$stmt->execute();

		$rows = $stmt->rowCount();
		return $rows;
	}

	public function DeleteProduct($id) {
		$stmt = $this->conn->prepare("CALL DeleteProduct(:id)");
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$rows = $stmt->rowCount();
		return $rows;
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
}

?>
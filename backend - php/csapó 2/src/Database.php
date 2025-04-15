<?php

class Database {
    private $conn;
    
    public function __construct() {
        $this->connect();
    }
    private function connect() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=vizsga2025;charset=UTF8;port=8889", "root", "root");

            if($conn) {
                $this->conn = $conn;
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
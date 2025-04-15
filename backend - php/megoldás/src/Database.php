<?php

class Database {
    private $conn = null;

    public function __construct() {
        $this->connect();
    }
    private function connect() {
        // Az utolsó argument csak a MAMP miatt van ott
        $conn = new mysqli("localhost", "root", "root", "vizsga2025", 8889, "/Applications/MAMP/tmp/mysql/mysql.sock");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $this->conn = $conn;
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>

<?php
class Database {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "db_coffee");

        if ($this->conn->connect_error) {
            die("Koneksi database gagal");
        }
    }
}

<?php
require_once __DIR__ . "/../config/Database.php";

class User extends Database {

    // LOGIN
    public function login($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = md5($password);

        $sql = "SELECT * FROM users 
                WHERE username='$username' 
                AND password='$password'";

        $query = $this->conn->query($sql);

        if ($query->num_rows > 0) {
            return $query->fetch_assoc();
        }
        return false;
    }

    // REGISTER (KHUSUS USER LEVEL 1)
    public function register($username, $password) {
        $username = $this->conn->real_escape_string($username);
        $password = md5($password);
        $level = 1;

        // Cek username
        $cek = $this->conn->query(
            "SELECT id FROM users WHERE username='$username'"
        );

        if ($cek->num_rows > 0) {
            return "Username sudah digunakan";
        }

        $sql = "INSERT INTO users (username, password, level)
                VALUES ('$username', '$password', '$level')";

        if ($this->conn->query($sql)) {
            return true;
        }
        return "Registrasi gagal";
    }
}

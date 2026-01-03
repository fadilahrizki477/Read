<?php
require_once __DIR__ . "/../config/Database.php";

class Menu extends Database {

    // GET ALL MENU ITEMS
    public function getAllMenus() {
        $sql = "SELECT * FROM menu_items ORDER BY category, id";
        $result = $this->conn->query($sql);
        
        $menus = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $menus[] = $row;
            }
        }
        return $menus;
    }

    // GET MENU BY ID
    public function getMenuById($id) {
        $id = $this->conn->real_escape_string($id);
        $sql = "SELECT * FROM menu_items WHERE id = '$id'";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return false;
    }

    // GET MENU BY CATEGORY
    public function getMenuByCategory($category) {
        $category = $this->conn->real_escape_string($category);
        $sql = "SELECT * FROM menu_items WHERE category = '$category' ORDER BY id";
        $result = $this->conn->query($sql);
        
        $menus = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $menus[] = $row;
            }
        }
        return $menus;
    }

    // ADD NEW MENU
    public function addMenu($category, $name, $description, $image_url) {
        $category = $this->conn->real_escape_string($category);
        $name = $this->conn->real_escape_string($name);
        $description = $this->conn->real_escape_string($description);
        $image_url = $this->conn->real_escape_string($image_url);

        $sql = "INSERT INTO menu_items (category, name, description, image_url) 
                VALUES ('$category', '$name', '$description', '$image_url')";

        if ($this->conn->query($sql)) {
            return true;
        }
        return "Gagal menambah menu: " . $this->conn->error;
    }

    // UPDATE MENU
    public function updateMenu($id, $category, $name, $description, $image_url) {
        $id = $this->conn->real_escape_string($id);
        $category = $this->conn->real_escape_string($category);
        $name = $this->conn->real_escape_string($name);
        $description = $this->conn->real_escape_string($description);
        $image_url = $this->conn->real_escape_string($image_url);

        $sql = "UPDATE menu_items 
                SET category = '$category', 
                    name = '$name', 
                    description = '$description', 
                    image_url = '$image_url' 
                WHERE id = '$id'";

        if ($this->conn->query($sql)) {
            return true;
        }
        return "Gagal update menu: " . $this->conn->error;
    }

    // DELETE MENU
    public function deleteMenu($id) {
        $id = $this->conn->real_escape_string($id);
        $sql = "DELETE FROM menu_items WHERE id = '$id'";

        if ($this->conn->query($sql)) {
            return true;
        }
        return "Gagal hapus menu: " . $this->conn->error;
    }

    // GET ALL CATEGORIES
    public function getAllCategories() {
        $sql = "SELECT DISTINCT category FROM menu_items ORDER BY category";
        $result = $this->conn->query($sql);
        
        $categories = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row['category'];
            }
        }
        return $categories;
    }
}
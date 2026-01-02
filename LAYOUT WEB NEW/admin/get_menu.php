<?php
session_start();

// Cegah akses jika bukan admin
if (!isset($_SESSION['login']) || $_SESSION['level'] != 0) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

require_once __DIR__ . "/../classes/Menu.php";

if (isset($_GET['id'])) {
    $menuObj = new Menu();
    $menu = $menuObj->getMenuById($_GET['id']);
    
    if ($menu) {
        header('Content-Type: application/json');
        echo json_encode($menu);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Menu not found']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'ID not provided']);
}
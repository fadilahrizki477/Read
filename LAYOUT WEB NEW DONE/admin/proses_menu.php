<?php
session_start();

// Cegah akses jika bukan admin
if (!isset($_SESSION['login']) || $_SESSION['level'] != 0) {
    header("Location: ../login.php");
    exit;
}

require_once __DIR__ . "/../classes/Menu.php";
$menuObj = new Menu();

// ADD MENU
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    $result = $menuObj->addMenu($category, $name, $description, $image_url);

    if ($result === true) {
        header("Location: manage_menu.php?success=add");
    } else {
        header("Location: manage_menu.php?error=" . urlencode($result));
    }
    exit;
}

// UPDATE MENU
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    $result = $menuObj->updateMenu($id, $category, $name, $description, $image_url);

    if ($result === true) {
        header("Location: manage_menu.php?success=update");
    } else {
        header("Location: manage_menu.php?error=" . urlencode($result));
    }
    exit;
}

// DELETE MENU
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $result = $menuObj->deleteMenu($id);

    if ($result === true) {
        header("Location: manage_menu.php?success=delete");
    } else {
        header("Location: manage_menu.php?error=" . urlencode($result));
    }
    exit;
}

// Jika tidak ada action yang valid
header("Location: manage_menu.php");
exit;
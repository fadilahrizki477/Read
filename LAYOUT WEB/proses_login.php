<?php
session_start();
require_once "classes/User.php";

$user = new User();
$data = $user->login($_POST['username'], $_POST['password']);

if ($data) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    // Semua user diarahkan ke index.php setelah login
    header("Location: index.php");
    exit;
} else {
    echo "Login gagal! <a href='login.php'>Coba lagi</a>";
}
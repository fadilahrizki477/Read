<?php
// File untuk mengecek apakah user sudah login
// Digunakan di halaman yang membutuhkan login

if (!isset($_SESSION['login'])) {
    // Simpan halaman yang ingin diakses
    $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
    
    // Redirect ke halaman login
    header("Location: login.php?error=login_required");
    exit;
}
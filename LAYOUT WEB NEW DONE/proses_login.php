<?php
session_start();
require_once "classes/User.php";

$user = new User();
$data = $user->login($_POST['username'], $_POST['password']);

if ($data) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    // Cek apakah ada halaman yang ingin diakses sebelumnya
    if (isset($_SESSION['redirect_after_login'])) {
        $redirect = $_SESSION['redirect_after_login'];
        unset($_SESSION['redirect_after_login']); // Hapus setelah digunakan
        header("Location: " . $redirect);
    } else {
        // Jika tidak ada, redirect ke index.php
        header("Location: index.php");
    }
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Gagal</title>
    <link rel="stylesheet" href="assets/css/result.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="result-box">
    <div class="icon-wrapper">
        <div class="icon-error">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <h2>Login Gagal!</h2>
    <p class="message">Username atau password yang Anda masukkan salah. Silakan periksa kembali dan coba lagi.</p>
    <div class="btn-wrapper">
        <a href="login.php" class="btn btn-primary">
            <i class="fa-solid fa-arrow-left"></i>
            Coba Lagi
        </a>
        <a href="register.php" class="btn btn-secondary">
            <i class="fa-solid fa-user-plus"></i>
            Register
        </a>
    </div>
</div>

</body>
</html>
<?php
}
?>
<?php
require_once "classes/User.php";

$user = new User();
$hasil = $user->register($_POST['username'], $_POST['password']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Registrasi</title>
    <link rel="stylesheet" href="assets/css/result.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="result-box">
    <?php if ($hasil === true): ?>
        <!-- SUCCESS -->
        <div class="icon-wrapper">
            <div class="icon-success">
                <i class="fa-solid fa-check"></i>
            </div>
        </div>
        <h2>Registrasi Berhasil!</h2>
        <p class="message">
            Akun Anda telah berhasil dibuat. Silakan login untuk melanjutkan dan menikmati layanan Coffee Toffee.
        </p>
        <div class="btn-wrapper">
            <a href="login.php" class="btn btn-primary">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login Sekarang
            </a>
            <a href="index.php" class="btn btn-secondary">
                <i class="fa-solid fa-home"></i>
                Ke Beranda
            </a>
        </div>
    <?php else: ?>
        <!-- ERROR -->
        <div class="icon-wrapper">
            <div class="icon-error">
                <i class="fa-solid fa-exclamation-triangle"></i>
            </div>
        </div>
        <h2>Registrasi Gagal</h2>
        <p class="message">
            <?= htmlspecialchars($hasil) ?>
        </p>
        <div class="btn-wrapper">
            <a href="register.php" class="btn btn-primary">
                <i class="fa-solid fa-arrow-left"></i>
                Coba Lagi
            </a>
            <a href="login.php" class="btn btn-secondary">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
            </a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
<?php
session_start();

// Cegah akses langsung
if (!isset($_SESSION['login']) || $_SESSION['level'] != 0) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>

<div class="dashboard">
    <h1>HALAMAN ADMIN</h1>
    <p>Selamat datang Admin <?= htmlspecialchars($_SESSION['username']); ?></p>
    
    <div style="margin-top: 30px;">
        <a href="../index.php" style="margin-right: 15px;">← Kembali ke Home</a>
        <a href="../logout.php">Logout</a>
    </div>
</div>

</body>
</html>
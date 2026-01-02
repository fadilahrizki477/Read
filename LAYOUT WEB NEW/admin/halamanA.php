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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .admin-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .admin-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            color: white;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .admin-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .admin-card i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .admin-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .admin-card p {
            font-size: 14px;
            opacity: 0.9;
        }

        .card-menu {
            background: linear-gradient(135deg, #000000ff 0%, #4c9e00ff 100%);
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h1>HALAMAN ADMIN</h1>
    <p>Selamat datang Admin <?= htmlspecialchars($_SESSION['username']); ?></p>
    
    <div class="admin-cards">
        <a href="manage_menu.php" class="admin-card card-menu">
            <i class="fa-solid fa-mug-hot"></i>
            <h3>Kelola Menu</h3>
            <p>Tambah, edit, dan hapus menu Coffee Toffee</p>
        </a>
    </div>
    
    <div style="margin-top: 50px;">
        <a href="../index.php" style="margin-right: 15px;"><i class="fa-solid fa-home"></i> Kembali ke Home</a>
        <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>
</div>

</body>
</html>
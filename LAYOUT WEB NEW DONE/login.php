<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .alert {
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
            text-align: left;
        }
        
        .alert-warning {
            background: #fff3cd;
            color: #856404;
            border: 1px solid #ffeaa7;
        }
        
        .alert-warning i {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="auth-box">

  <h2><i class="fa-solid fa-right-to-bracket"></i> LOGIN</h2>

  <?php if (isset($_GET['error']) && $_GET['error'] == 'login_required'): ?>
  <div class="alert alert-warning">
    <i class="fa-solid fa-exclamation-triangle"></i>
    Silakan login terlebih dahulu untuk mengakses halaman tersebut.
  </div>
  <?php endif; ?>

  <form action="proses_login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>

  <p>Belum punya akun? <a href="register.php">Register</a></p>

  <!-- BACK TO HOME DI PALING BAWAH -->
  <div class="back-wrapper bottom">
    <a href="index.php" class="back-home">
      <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
    </a>
  </div>

</div>

</body>
</html>
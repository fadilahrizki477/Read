<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/auth.css">

<div class="auth-box">

  <h2>LOGIN</h2>

  <form action="proses_login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>

  <p>Belum punya akun? <a href="register.php">Register</a></p>

  <!-- BACK TO HOME DI PALING BAWAH -->
  <div class="back-wrapper bottom">
    <a href="index.php" class="back-home">Kembali ke Beranda</a>
  </div>

</div>

</body>
</html>

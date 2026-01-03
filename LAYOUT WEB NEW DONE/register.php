<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="auth-box">
    <h2><i class="fa-solid fa-user-plus"></i> REGISTER</h2>

    <form action="proses_register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login</a></p>

    <!-- BACK TO HOME DI PALING BAWAH -->
    <div class="back-wrapper bottom">
        <a href="index.php" class="back-home">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
</div>

</body>
</html>
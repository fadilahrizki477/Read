<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami - Coffee Toffee</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/kontak.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

  <header>
    <div class="container navbar">
      <div class="logo">Coffee Toffee</div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="kopi.php">Kopi</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          
          <?php if (isset($_SESSION['login'])): ?>
            <?php if ($_SESSION['level'] == 0): ?>
              <li><a href="admin/halamanA.php"><i class="fa-solid fa-user-shield"></i> Admin Panel</a></li>
            <?php endif; ?>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
          <?php else: ?>
            <li><a href="login.php"><i class="fa-solid fa-user"></i> Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>

  <section class="contact-hero">
    <div class="container"> <br>
      <p class="subtitle">CONTACT US</p>
      <h1>KONTAK KAMI</h1>
      <div class="divider"></div>
    </div>
  </section>

  <section class="contact-content">
    <div class="container">
      <div class="contact-main">
        <div class="contact-image">
          <img src="https://cdn.bitrix24.id/b14044525/landing/a0f/a0f9d58b4e1f1844f4247b9c14f4b3d4/DSC05718_2x.jpg" alt="Coffee Toffee Staff">
          <div class="since-badge">
            <h3>SEJAK 2006</h3>
            <p>" Kopi terbaik adalah kopi [Indonesia] yang diseduh dengan hati " serta dinikmati bersama orang - orang terdekat</p>
          </div>
        </div>

        <div class="contact-info">
          <div class="office-info">
            <div class="icon-header">
              <i class="fa-solid fa-building"></i>
              <h3>OFFICE PT. COFFEE TOFFEE INDONESIA</h3>
            </div>
            
            <div class="location-item">
              <h4>SURABAYA 1</h4>
              <p>Jln. Klampis Aji II No. 8, Surabaya, Jawa Timur 60117</p>
              <p>Telp. (+62) 851 8611 1106</p>
            </div>

            <div class="location-item">
              <h4>SURABAYA 2</h4>
              <p>JL. Dharmahusada 181, Mojo, Gubeng, Kel. Mojo, Kec. Gubeng, Kota Surabaya, Prop. Jawa Timur</p>
              <p>Telp. 031-5929500</p>
            </div>

            <div class="location-item">
              <h4>Depok</h4>
              <p>Jl. Margonda Raya No 438, Kota Depok, Jawa Barat 16424</p>
              <p>Telp. (+21) 388 10016</p>
            </div>
          </div>

          <div class="stores-info">
            <div class="icon-header">
              <i class="fa-solid fa-store"></i>
              <h3>STORES</h3>
            </div>
            <p>Kami adalah jaringan kedai kopi nasional dengan jumlah lebih dari 50 gerai yang tersebar di beberapa kota besar di Indonesia</p>
            <p class="cities">Surabaya - Depok - Bandung - Garut - Banjarmasin - Banjarbaru<br>Lombok - Madiun - Samarinda</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="social-contact">
    <div class="container">
      <h2>JEJARING KONTAK</h2>
      <p class="social-subtitle">Anda dapat berkomunikasi lebih jauh dengan kami melalui jejaring media berikut :</p>
      
      <div class="social-grid">
        <div class="social-item">
          <a href="https://www.instagram.com/coffeetoffeeidn/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <h4>INSTAGRAM</h4>
          <a href="https://www.instagram.com/coffeetoffeeidn/">@CoffeeToffeeIDN</a>
        </div>

        <div class="social-item">
           <a href="https://www.facebook.com/coffeetoffee/?eid=ARAEtp5zVjJnO0WI3AxY6SZQLA5VdCDxZxxobZQEe4ErD9mybc-9t-lw2i1AAS4sz1X47JRpzqQ9ge5t" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <h4>FACEBOOK</h4>
          <a href="https://www.facebook.com/coffeetoffee/?eid=ARAEtp5zVjJnO0WI3AxY6SZQLA5VdCDxZxxobZQEe4ErD9mybc-9t-lw2i1AAS4sz1X47JRpzqQ9ge5t">Coffee Toffee Indonesia</a> 
        </div>

        <div class="social-item">
          <i class="fa-solid fa-envelope"></i>
          <h4>EMAIL</h4>
          <a href="mailto:coffeetoffeeidn@gmail.com">coffeetoffeeidn@gmail.com</a>
        </div>

        <div class="social-item">
          <a href="https://api.whatsapp.com/send?phone=628996606440" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
          <h4>WHATSAPP</h4>
          <a href="https://api.whatsapp.com/send?phone=628996606440">08996606440</a>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p>© <?php echo date("Y"); ?> All rights reserved.</p>
  </footer>

</body>

</html>
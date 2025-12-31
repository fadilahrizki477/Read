<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Toffee - Indonesian Coffee</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

  <header>
    <div class="container navbar">
      <div class="logo">Coffee Toffee</div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Kopi</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Kontak</a></li>
          
          <?php if (isset($_SESSION['login'])): ?>
            <!-- Jika sudah login -->
            <?php if ($_SESSION['level'] == 0): ?>
              <!-- Menu khusus admin -->
              <li><a href="admin/halamanA.php"><i class="fa-solid fa-user-shield"></i> Admin Panel</a></li>
            <?php endif; ?>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
          <?php else: ?>
            <!-- Jika belum login -->
            <li><a href="login.php"><i class="fa-solid fa-user"></i> Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero-coffee">
    <div class="hero-content">
      <h1>OUR COFFEE</h1>
      <p class="subtitle">
        ONLY THE BEST OF SPECIALTY COFFEE FROM INDONESIA
      </p>

      <div class="circle-image">
        <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2019/12/25/552233370.jpg" alt="">
      </div>

      <p class="origin">
        9 VARIAN DARI ORIGIN TERBAIK INDONESIA
      </p>
    </div>
  </section>

  <section class="section menu">
    <div class="container">
      <div class="section-title">
        <h2>OUR MENU</h2>
        <span class="line"></span>
        <div class="menu-grid">

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg">
            <h4>OUR BEANS</h4>
            <p>
              Biji kopi grade Specialty Arabica dan Fine Robusta dari 9 perkebunan terbaik Indonesia
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/5d2/5d24e7726f8d55a532d3fc23cea3c338/02_Coffee_Toffee_-_Coffee_based_drink_02_2x.jpg">
            <h4>COFFEE-BASED DRINKS</h4>
            <p>
              Dari minuman tradisional berbasis espresso sampai berbagai minuman racikan kopi terkini
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/04d/04dc5af81ad5b85830e8b40d6ba087fd/03_Coffee_Toffee_-_Non_Coffee_Drinks_02_2x.jpg">
            <h4>NON-COFFEE</h4>
            <p>
              Beragam pilihan minuman non-kopi untuk semua kalangan
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/c2c/c2cb0be94f3715677f67326a554017da/04_Coffee_Toffee_-_Food_n_Snack_03_-_Cordon_Bleu_2x.jpg">
            <h4>FOOD & SNACK</h4>
            <p>
              Berbagai pilihan makanan dan camilan yang cocok menemani kopi
            </p>
          </div>
        </div>
  </section>

  <section class="section about">
    <div class="container about-grid">
      <div class="about-text">
        <h3>CERITA KAMI</h3>
        <p>Dimulai dari satu outlet kecil di depan satu minimarket di kota Surabaya, kami berkembang menjadi jaringan kedai kopi nasional dengan cabang terbesar di banyak kota di Indonesia</p>
        <p>Di tahun 2012, kami adalah pionir dan penggagas dalam gerakan bangga terhadap kopi Indonesia dengan kampanye "Yes I Drink Indonesian Coffe."</p>
        <p>Di tahun 2017, kami mendapatkan Penghargaan Indonesia Franchise Award dari kementrian Perdagangan sebagai <b>Pemenang Nasional</b>. Penghargaan ini serta diserhakan langsung oleh Bapak Presiden RI Joko Widodo </p>
        <a href="#" class="btn">Selengkapnya</a>
      </div>
      <img src="https://cdn.bitrix24.id/b14044525/landing/7ba/7bab5dccad7b1d57c7c8112c420ff41e/Coffee_Toffee_-_Our_Story_1x.png" alt="Coffee Toffee">
    </div>
  </section>

  <section class="contact-section">
    <div class="contact-header">
      <p class="small-title">GET UP CLOSE AND PERSONAL</p>
      <h2>CONTACT US</h2>
      <span class="line"></span>
    </div>

    <div class="contact-grid">
      <div class="contact-item">
        <img src="instagram.png" alt="">
        <h4>INSTAGRAM</h4>
        <p>@coffeetoffeeidn</p>
      </div>

      <div class="contact-item">
        <img src="facebook.png" alt="">
        <h4>FACEBOOK</h4>
        <p>Coffee Toffee Indonesia</p>
      </div>

      <div class="contact-item">
        <img src="email.png" alt="">
        <h4>EMAIL</h4>
        <p>coffeetoffeeidn@gmail.com</p>
      </div>

      <div class="contact-item">
        <img src="tiktok.png" alt="">
        <h4>TIKTOK</h4>
        <p>@coffeetoffeeidn</p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p>© 2025 All rights reserved.</p>
  </footer>

</body>

</html>
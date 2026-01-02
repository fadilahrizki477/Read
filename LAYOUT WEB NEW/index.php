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
  <link rel="stylesheet" href="assets/css/kontak.css">
  <link rel="stylesheet" href="assets/css/galery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
  <header>
    <div class="container navbar">
      <div class="logo">Coffee Toffee</div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="kopi.php">Kopi</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          
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
        <h2>OUR MENU</h2> <br>
        <span class="line"></span>
        <div class="menu-grid">

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg"> <br>
            <h4>OUR BEANS</h4>
            <p>
              Biji kopi grade Specialty Arabica dan Fine Robusta dari 9 perkebunan terbaik Indonesia
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/5d2/5d24e7726f8d55a532d3fc23cea3c338/02_Coffee_Toffee_-_Coffee_based_drink_02_2x.jpg"><br>
            <h4>COFFEE-BASED DRINKS</h4>
            <p>
              Dari minuman tradisional berbasis espresso sampai berbagai minuman racikan kopi terkini
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/04d/04dc5af81ad5b85830e8b40d6ba087fd/03_Coffee_Toffee_-_Non_Coffee_Drinks_02_2x.jpg"> <br>
            <h4>NON-COFFEE</h4>
            <p>
              Beragam pilihan minuman non-kopi untuk semua kalangan
            </p>
          </div>

          <div class="menu-item">
            <img src="https://cdn.bitrix24.id/b14044525/landing/c2c/c2cb0be94f3715677f67326a554017da/04_Coffee_Toffee_-_Food_n_Snack_03_-_Cordon_Bleu_2x.jpg"> <br>
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
        <h1>CERITA KAMI</h1> <br>
        <p>Dimulai dari satu outlet kecil di depan satu minimarket di kota Surabaya, kami berkembang menjadi jaringan kedai kopi nasional dengan cabang terbesar di banyak kota di Indonesia</p>
        <br>
        <p>Di tahun 2012, kami adalah pionir dan penggagas dalam gerakan bangga terhadap kopi Indonesia dengan kampanye "Yes I Drink Indonesian Coffe."</p>
        <br>
        <p>Di tahun 2017, kami mendapatkan Penghargaan Indonesia Franchise Award dari kementrian Perdagangan sebagai <b>Pemenang Nasional</b>. Penghargaan ini serta diserhakan langsung oleh Bapak Presiden RI Joko Widodo </p>
        <br>
        <a href="tentang_kami.php" class="btn">Selengkapnya</a>
      </div>
      <img src="https://cdn.bitrix24.id/b14044525/landing/7ba/7bab5dccad7b1d57c7c8112c420ff41e/Coffee_Toffee_-_Our_Story_1x.png" alt="Coffee Toffee">
    </div>
  </section>

  <!-- TAKE US WITH YOU -->
<section class="take-us">
  <div class="container">
    <p class="small-title"><b>TAKE US WITH YOU</b></p>
    <h2>BAWA KAMI DALAM KESEHARIAN KAMU</h2>
    <span class="line"></span>

    <div class="take-grid">
      <div class="take-item">
        <i class="fa-solid fa-users"></i>
        <h4>CATERING</h4>
        <p>Kamu bisa membawa Coffee Toffee dalam acara kantor atau selebrasi pribadi kamu</p>
      </div>

      <div class="take-item">
        <i class="fa-solid fa-bag-shopping"></i>
        <h4>COFFEE PACK</h4>
        <p>Dalam kemasan 200gr, kamu bisa menikmati kopi specialty arabika Coffee Toffee di rumah</p>
      </div>

      <div class="take-item">
        <i class="fa-solid fa-shirt"></i>
        <h4>MERCHANDISE</h4>
        <p>Berbagai pilihan merchandise untuk menunjukkan kecintaan kamu pada kopi</p>
      </div>

      <div class="take-item">
        <i class="fa-solid fa-gift"></i>
        <h4>HAMPERS</h4>
        <p>Kirimkan satu kotak kopi dan minuman favorit serta mug kopi untuk orang spesial kamu</p>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="gallery-section">
  <div class="container">
    <p class="small-title"><b>MOMENTS</b></p>
    <h2>GALLERY</h2>
    <span class="line"></span>

    <div class="gallery-grid">
      <img src="https://cdn.bitrix24.id/b14044525/landing/83d/83d41b5e852f4e4453d050db3eefe3ba/Coffee_Toffee_-_Gallery_01b_-_Menyerahkan_gelas_take_away_2x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/410/4106d5147ec1b026daeedd1ea72ae5d3/Coffee_Toffee_-_Gallery_02b_-_Barista_Senyuman_Hangat_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/de6/de6e5e30d25c19b6cba2653cfa61df6d/Coffee_Toffee_-_Gallery_04b_-_Take_Away_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/f97/f97569b8085540f7cd768b003720e451/Coffee_Toffee_-_Gallery_03b_-_Happy_Customer_2x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/1b0/1b05c5c9c6bda019158adf36dffa01af/Coffee_Toffee_-_Gallery_05b_-_Barista_Brewing_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/ff3/ff30bcff3eaf4435381e1b418bcb8c11/Coffee_Toffee_-_Gallery_06b_-_Pelayanan_Hangat_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/c92/c9299b8a8020afb495f9d6cb6fe9caa4/Coffee_Toffee_-_Gallery_07b_-_Pride_in_every_cup_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/ed9/ed91aee6adb75ea1bb9765175043d023/Coffee_Toffee_-_Gallery_08b_-_Coffee_Bean_with_Heart_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/713/71374217a1e039e6b8ca376aa7f090e4/Coffee_Toffee_-_Gallery_10b_-_Iced_Coffee_for_Everyone_1x.jpg">
      <img src="https://cdn.bitrix24.id/b14044525/landing/a1e/a1ee3b306a3086be52a94b6bafe81dab/Coffee_Toffee_-_Gallery_11b_-_Manual_Brew_1x.jpg">
    </div>
  </div>
</section>


  <section class="contact-section">
    <div class="contact-header">
      <p class="small-title">GET UP CLOSE AND PERSONAL</p>
      <h2>CONTACT US</h2>
      <span class="line"></span>
    </div>

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
  </section>

  <footer class="footer">
    <p>© 2025 All rights reserved.</p>
  </footer>

</body>

</html>
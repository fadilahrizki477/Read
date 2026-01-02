<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami | Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/tentang_kami.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

<section class="section">
    <div class="container section-title">
        <br>
        <h5>ABOUT US</h5>
        <h2>TENTANG KAMI</h2>
        <div class="divider"></div>
        <p>INI ADALAH MENGENAI CERITA DAN PERJALANAN KAMI, APA YANG KAMI LAKUKAN, SERTA ORANG - ORANG 
        DI BELAKANG BRAND COFFEE TOFFEE</p>
    </div>
</section>

<section class="section">
    <div class="container story">
        <img src="https://cdn.bitrix24.id/b14044525/landing/f3f/f3f243ac76bf25134c20a56bd2c9a032/Yidic_-_01_2x.png" alt="Coffee Toffee">
        <div>
            <h5>OUR STORY</h5>
            <h2>CERITA KAMI</h2>
            <div class="divider left"></div>
            <p>
                Kami adalah perusahaan kopi yang mendedikasikan seluruh gairah, kecintaan, dan antusiasme kami kepada dunia kopi yang menakjubkan. Kami adalah perusahaan lokal dan sebagian besar bahan baku yang kami gunakan adalah lokal. Ya, dan kami mengatakan hal tersebut dengan bangga.
            </p> <br>
            <p>
                Kami tahu, begitu juga Anda, bahwa biji-biji kopi terbaik dunia berasal dari Indonesia. Kami berkeliling ke berbagai pelosok Indonesia dan bekerja sama dengan para petani dan pemanggang kopi lokal untuk mendapatkan cite rasa kopi terbaik Indonesia, bijt kopi arabika grade satu dan berbagai perkebunan yang tersebar di Nusantara. 
            </p> <br>
            <p>
                Dengan pengalaman dan pengetahuan kami di industri kopi ritel, mulai dan pemWhan biji kopi sampai dengan bagaimana mendesain sebuah coffee bar, kami membuat perjalanan bisnis kopi Anda menjadi EASY,SIMPLE,dan FUN!
            </p>
            <div class="highlight">
                <b>SEKARANG</b> kami mengajak Anda yang mencintai kopi untuk tumbuh
                bersama dalam bisnis yang fun dan penuh lifestyle.
            </div>
        </div>
    </div>
</section>

<section class="section gray">
    <div class="container section-title">
        <h2>COFFEE EXPERTISE</h2>
        <div class="divider"></div>
    </div>

    <div class="container expertise">
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/00c/00c1d0f5f648e818cde32b107a2f8c74/Coffee_Expertise_-_04_2x.png">
            <h4>PROCESSING FACILITIES</h4>
            <p>Roasting House</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/2a7/2a7a4cd5731a2464173632f058baf86b/Coffee_Expertise_-_02_2x.png">
            <h4>INDUSTRY NETWORK</h4>
            <p>INDONESIAN COFFEE SPECIALTY ASSOCIATION
            National Coffee Judges</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/8e0/8e0be154768b8c883b09357bd697fd47/Coffee_Expertise_-_03_2x.png">
            <h4>EVERYTHING START FROM THE ROOT</h4>
            <p>Carefully Selected Grade A Coffee Beans</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/ddb/ddb565e43a52a830701cf23b93f37c56/Coffee_Expertise_-_01_2x.png">
            <h4>TRAINING CENTER</h4>
            <p>Espresso Lab Barista Training Center</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/d00/d006b60b243793b87c3f21ad455b75f8/Coffee_Expertise_-_05_2x.png">
            <h4>QUALITY CONTROL</h4>
            <p>Certified Cupper</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container section-title">
        <h5>THE PEOPLE</h5>
        <h2>ORANG - ORANG DI BELAKANG MERK</h2>
        <div class="divider"></div>
    </div>

    <div class="container people">
        <div class="person">
            <img src="https://cdn.bitrix24.id/b14044525/landing/fd2/fd2e41694cd8824b15d6eb2c8f056583/DSC_0043_2x.png"><br>
            <h4>ODI ANINDITO</h4>
            <p><b>FOUNDER - CEO</b></p>
            <br>
            <p>"Coffee Toffee bukan hanya sekedar kopi, tapi apa yang kami lakukan disini adalah mengenai memberikan kebanggan terhadap kopi indonesia"</p>
        </div>
        <div class="person">
            <img src="https://cdn.bitrix24.id/b14044525/landing/728/7287ba5dc006b54d824f95191fd975c7/DSC_0043_2x_1x.png"> <br>
            <h4>RAKHMA SINSERIA</h4>
            <p><b>CFO (Chief Financial Officer)</b></p> <br>
            <p>Love, Live, Coffee..</p>
        </div>
        <div class="person">
            <img src="https://cdn.bitrix24.id/b14044525/landing/32b/32b7e345a4665e59ee8f352b6fce40cc/DSC_0043_-_3_2x.png"> <br>
            <h4>ZAI ACHMAD</h4>
            <p><b>CXO (Chief Expansion Officer)</b></p> <br>
            <p>Roast and make the best of your possible cup of coffee with all your heart, that's what we called as a perfect cup of coffee Coffee Toffee bukan hanya sekedar kopi, tapi apa yang kami lakukan disini adalah mengenai memberikan kebanggan terhadap kopi indonesia</p>
        </div>
        <div class="person">
            <img src="https://cdn.bitrix24.id/b14044525/landing/fad/fad4c4f952cb7a3460ded1f58ad8be29/Pak_dhe_coffee_toffee_2x.png"> <br>
            <h4>SISWANTO (PAK DHE)</h4>
            <p><b>COFFEE EXPERT & RND   </b></p> <br>
            <p>Apapun situasinya yang saya tahu saya harus tetap melakukan yang terbaik. Berkaryalah dengan hati agar bisa memberikan sesuatu yang bermanfaat.</p>
        </div>
    </div>
</section>

<section class="section gray">
    <div class="container section-title">
        <h5>RECOGNITION AND AWARDS</h5>
        <h2>PENCAPAIAN</h2> 
        <div class="divider"></div>
        <p>Coffee Toffee Indonesia sebagai merek kopi lokal tanah air tak henti-hentinya berusaha mengupayakan yang terbaik dan memberikan kebanggaan atas pencapaian prestasinya</p>
    </div>

    <div class="container achievement">
        <div>
            <img src="https://cdn.bitrix24.id/b14044525/landing/cd4/cd431ac2e0badc6a1306826e1591cd92/Scale_Up_2x.png"> <br>
            <p>2011 - SCALE UP COFFEE SHOP</p>
        </div>
        <div>
            <img src="https://cdn.bitrix24.id/b14044525/landing/f63/f637d26592e20f124685d95e0212e9d4/Cain_-_01_2x.png"> <br>
            <p>2014 - SECOND LARGEST COFFEE SHOP CHAIN</p>
        </div>
        <div>
            <img src="https://cdn.bitrix24.id/b14044525/landing/cfc/cfcc1368cf2318936105aa67f87ecdf4/Endevour_-_01_2x.png"> <br>
            <p>2015 – PASS ENDEAVOR LOCAL AND INTERNATIONAL SELECTION PANEL </p>
        </div>
        <div>
            <img src="https://cdn.bitrix24.id/b14044525/landing/a54/a543abb49d5a04e8b4cf275b1ce205e0/Top_of_Mind_-_2015_2x.png"> <br>
            <p>2015 - TOP OF MIND BRAND AWARDS</p>
        </div>
        <div>
            <img src="https://cdn.bitrix24.id/b14044525/landing/e5d/e5dc77d0612800c4ccbd32fb842d4519/Award_-_08.jpeg_2x.png"> <br>
            <p>2016 - PENGHARGAAN WARALABA INDONESIA (PWI) - KATEGORI WARALABA UTAMA</p>
        </div>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> Coffee Toffee. All rights reserved.
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kopi Kami - Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/kopi.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-- NAVBAR -->
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

<!-- HERO -->
<section class="hero">
    <span>OUR COFFEE</span>
    <h1>BIJI KOPI KAMI</h1>
    <div class="line"></div>
</section>

<!-- KOMITMEN -->
<section class="two-column">
    <div class="text">
        <h2>KOMITMEN DALAM IDEALISME</h2>
        <p>
            Selaras dengan kampanye kami : "Yes, I Drink Indonesian Coffee" maka Coffee Tofee berkomitment HANYA menggunakan biji - biji kopi terbaik Indonesia. Lagipula kopi Indonesia tidak kalah juga koq dengan kopi dari luar negeri. 
        </p>
        <p>
           Kami menggunakan dua varian kopi : Arabika dan Robusta. Untuk arabika kami menggunakan grade "Specialty Arabica", sedangkan untuk robusta kami menggunakan grade "Fine Robusta". Kualitas terbaik di kelasnya.
        </p>
        <p>
            Saat ini kami menyediakan 8 origin terbaik dari berbagai perkebunan yang tersebar di Indonesia, salah satunya dari perkebunan kami sendiri di lereng Gunung Arjuno, Jawa Timur. Dengan berjalannya waktu, kami berencana untuk menambah varian coffee origin ini agar masyarakat Indonesia dapat menikmati aks biji - biji kopi terbaik dari seluruh Indonesia dengan harga terjangkau dan dengan mudah.
        </p>
    </div>
    <div class="image">
        <img src="https://cdn.bitrix24.id/b14044525/landing/83b/83b2238cd6fcc6c8785e3863708ca620/Coffee_Toffee_-_Komitmen_dalam_Idealisme_02c_2x.jpg" alt="Biji Kopi">
    </div>
</section>

<!-- KUALITAS -->
<section class="section-center">
    <h1>KUALITAS</h1>
    <div class="line"></div>
    <p>
        Kami memahami bahwa kualitas aroma dan rasa dari biji kopi adalah keutamaan. Kami di Coffee Toffee menyadari hal ini, oleh karena itu kami memastikan bahwa setiap proses perjalanan biji kopi,
        mulai dari pemetikan sampai penyeduhan memegang peranan penting dalam mentukan kualitas satu cangkir kopi kamu.
    </p>

    <div class="card-container">
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/6fd/6fde5434a05409a032933220a020ac25/Coffee_Toffee_-_Inbound_QC_02_2x.jpg">
            <h3>IN-BOUND QC</h3>
            <p>Pengecekan kualitas dimulai pertama kali ketika biji kopi <i>green bean</i> datang di fasilitas gudang dan pemanggangan.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/a81/a81d3a25331348f7ea60aba1549d495c/Coffee_Toffee_-_Cupping_Score_Nilai_Uji_Cita_Rasa_Kopi_02b_2x.jpg">
            <h3>CUPPING SCORE</h3>
            <p>Kami melakukan <i>cupping score</i> terhadap dengan metode <i>random sampling</i> untuk biji - biji kopi yang kami terima dari para petani dan suplier.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/728/728a70859ac59b125656f6e57ebd1beb/Coffee_Toffee_-_Freshly_Roast_02b_2x.jpg">
            <h3>FRESHLY ROAST</h3>
            <p>Kami memastikan kamu mendapatkan biji kopi dengan tingkat kesegaran terbaik melalui panggangan terbaru di setiap gerai Coffee Toffee.</p>
        </div>
    </div>
</section>

<!-- KUALITAS -->
<section class="section-center">
    <h1>PEMANGGANGAN IN-HOUSE</h1>
    <div class="line"></div>
    <p>
        Proses pemanggangan adalah salah satu proses kunci dalam mendapatkan  dan menjaga kualitas terbaik biji - biji kopi Coffee Toffee. Oleh karena itu, dimulai di tahun 2009 kami memutuskan untuk membangun fasilitas pemanggangan kopi kami sendiri serta mendidik dan mengembangkan tim "Coffee Experts" di HQ Coffee Toffee. Hal ini kami lakukan untuk memastikan bahwa setiap biji kopi yang dikirim ke setiap gerai Coffee Toffee adalah biji kopi yang bisa membawa dengan bangga nama baik  dari kualitas biji kopi Indoenesia.
    </p>

    <div class="card-container">
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/db2/db2bb4b6a4b962e712d35d8c7e20bcaa/Coffee_Toffee_-_Green_Bean_masuk_Hopper_01b_1x.jpg">
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/37a/37a76d620825f1d92edc362a46882257/Coffee_Toffee_-_Roasting_Facility_-_Roaster_Coffee_Expert_03c_1x.jpg">
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/d6d/d6d6bc99202497ffce863eb03055854b/Coffee_Toffee_-_Roasting_Facility_-_Roaster_Coffee_Expert_04b_2x.jpg">
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/4d7/4d706049878b94812ecf63177e1c00bb/Coffee_Toffee_-_Roasting_Facility_-_Roaster_Coffee_Expert_06b_1x.jpg">
        </div>
    </div>
</section>

<!-- KEBAIKAN DARI AWAL -->
<section class="section-center gray">
    <h1>KEBAIKAN DARI AWAL</h1>
    <div class="line"></div>
    <p>
        Kami percaya bahwa secangkir kopi yang kamu minum di gerai Coffee Toffee, dengan kenikmatan dan cita rasa terbaiknya berawal dari bagaimana kita memastikan hasil panen terbaik dari perkebunan kopi.
    </p>

    <div class="card-container">
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/40c/40c4500713c522d209280ac180a6cfe9/Coffee_Toffee_-_Perkebunan_-_Bibit_Kopi_02_2x.jpg">
            <h3>LANGKAH 1 : BIBIT YANG BAIK</h3>
            <p>Langkah pertama untuk mendapatkan panen terbaik adalah pemilihan bibit terbaik, seperti varietas andungsari, typica, bourbon, dll. Bibit kopi yang berumur 7 bulan langsung di tanam dan para mitra tani kami melakukan pemupukan tanaman secara rutin dengan pupuk organik.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/319/3193ff0d40cfd5183572cb67d694627c/Coffee_Toffee_-_Perkebunan_-_Petik_Merah_01_2x.jpg">
            <h3>LANGKAH 2 : PETIK MERAH</h3>
            <p>Buah kopi kita petik satu per satu dengan tangan petani langsung, tidak dipetik secara bersamaan (rampasan/racutan). Proses petik merah ini berguna untuk menjaga kesehatan tanaman kopi yang berbuah di panen berikutnya.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/fe8/fe820c57c52f789ee65756722fde5325/Coffee_Toffee_-_Perkebunan_-_Panen_Merah_01_2x.jpg">
            <h3>LANGKAH 3 : SORTASI CERI</h3>
            <p>Proses penting selanjutnya ada sortasi ceri. Kami melakukan dengan merendam buah kopi, bila mengapung di permukaan air maka buah kopi memiliki cacat/berpenyakit, dan buah kopi yang tenggelam adalah buah kopi (merah) berkualitas baik yang kita pilih.</p>
        </div>
    </div>

    <div class="card-container">
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/2d7/2d7939a7caa565558e966008d209953d/Coffee_Toffee_-_Perendaman_Kopi_2x.jpg">
            <h3>LANGKAH 4 : PENGOLAHAN CERI</h3>
            <p>Berikutnya kita proses pemisahan biji dengan kulit dagingnya dan dikeringkan sampai dengan kelembabannya + 10-13%. Proses pengolahan ini bermacam-macam mulai dari natural process, full washed process, semi washed process dan honey process. Pilihan proses pengolahan ini kami lakukan untuk mendapatkan rasa dan karakter mutu terbaik dari tiap single origin kopi.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/a05/a05d2a4c029a0c6a1f2569e0e4ab6d8d/Coffee_Toffee_-_Sortasi_Biji_Hijau_01_2x.jpg">
            <h3>LANGKAH 5 : SORTASI BIJI HIJAU</h3>
            <p>Kami melakukan sortasi biji hijau dan melakukan analisa fisik green bean coffee dengan mengacu pada standart SCAA green coffee defect handbook, hal ini kita lakukan untuk mengetahui dan memisahkan primary/secondary defect dengan green bean coffee yang berkualitas baik.</p>
        </div>
        <div class="card">
            <img src="https://cdn.bitrix24.id/b14044525/landing/ede/edefdad7a62033632d2326abd251c0a5/Coffee_Toffee_-_Penyimpanan_yg_Baik_01_2x.jpg">
            <h3>LANGKAH 6 : PENYIMPANAN</h3>
            <p>Salah satu hal penting sebelum green bean coffee di roasting adalah menyimpannya dengan baik, agar kualitas tetap terjaga. Ada 3 hal penting yang kita lakukan yaitu: menyimpan pada suhu tertentu yaitu 20-27 Celcius, menggunakan wadah berpori yang tidak terkontaminasi (karung goni bersih), dan tidak terkena matahari secara langsung.</p>
        </div>
    </div>
</section>

<footer>
    <p>© 2025 Coffee Toffee</p>
</footer>

</body>
</html>

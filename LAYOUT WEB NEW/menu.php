<?php
session_start();
require_once "classes/Menu.php";

$menuObj = new Menu();
$allMenus = $menuObj->getAllMenus();

// Organize menus by category
$menusByCategory = [];
foreach ($allMenus as $menu) {
    $menusByCategory[$menu['category']][] = $menu;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/menu.css">
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
          <li><a href="menu.php" class="active">Menu</a></li>
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          
          <?php if (isset($_SESSION['login'])): ?>
            <?php if ($_SESSION['level'] == 0): ?>
              <li><a href="admin/manage_menu.php"><i class="fa-solid fa-user-shield"></i> Kelola Menu</a></li>
            <?php endif; ?>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
          <?php else: ?>
            <li><a href="login.php"><i class="fa-solid fa-user"></i> Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <span class="hero-tag">OUR MENU</span>
        <h1>MENU KAMI</h1>
        <div class="line"></div>
    </div>
</section>

<!-- MENU CATEGORIES -->
<section class="menu-section">
    <div class="container">
        
        <?php if (empty($allMenus)): ?>
            <div style="text-align: center; padding: 60px 20px;">
                <i class="fa-solid fa-coffee" style="font-size: 64px; color: #ddd; margin-bottom: 20px;"></i>
                <h3>Menu belum tersedia</h3>
                <p>Menu sedang dalam proses pembaruan.</p>
            </div>
        <?php else: ?>

            <?php 
            // Category headers with images
            $categoryImages = [
                'Coffee-Based Drinks' => 'https://cdn.bitrix24.id/b14044525/landing/5d2/5d24e7726f8d55a532d3fc23cea3c338/02_Coffee_Toffee_-_Coffee_based_drink_02_2x.jpg',
                'Non-Coffee Drinks' => 'https://cdn.bitrix24.id/b14044525/landing/04d/04dc5af81ad5b85830e8b40d6ba087fd/03_Coffee_Toffee_-_Non_Coffee_Drinks_02_2x.jpg',
                'Food & Snack' => 'https://cdn.bitrix24.id/b14044525/landing/c2c/c2cb0be94f3715677f67326a554017da/04_Coffee_Toffee_-_Food_n_Snack_03_-_Cordon_Bleu_2x.jpg',
                'Coffee Pack' => 'https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg',
                'Merchandise' => 'https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg',
                'Hampers' => 'https://cdn.bitrix24.id/b14044525/landing/659/659ac3f5c1e010048e856c449c131579/Coffee_Toffee_-_Hampers_Parcel_05c_2x.jpg'
            ];

            $categoryDescriptions = [
                'Coffee-Based Drinks' => 'Coffee Toffee IDN adalah perusahaan kopi dengan pengalaman lebih dari 14 tahun, mengklaim bahwa salah satu keahlian kami adalah menciptakan varian minuman berbasis kopi.',
                'Non-Coffee Drinks' => 'Kami juga menyediakan berbagai macam non-coffee untuk memenuhi kebutuhan semua orang yang datang bersama Anda.',
                'Food & Snack' => 'Coffee Toffee Indonesia juga menyediakan berbagai pilihan makanan dan camilan yang cocok menemani kopi.',
                'Coffee Pack' => 'Sekarang kalian bisa dengan mudah menikmati coffee specialty dengan bermacam-macam karakter dari berbagai daerah penghasil kopi di Indonesia.',
                'Merchandise' => 'Berbagai pilihan merchandise untuk menunjukkan kecintaan kamu pada kopi.',
                'Hampers' => 'Jangan lewatkan momen istimewa orang-orang terdekatmu. Tunjukkan perhatianmu dengan parcel yang berisi biji kopi terbaik Indonesia.'
            ];
            ?>

            <?php foreach ($menusByCategory as $category => $menus): ?>
            <div class="menu-category">
                <div class="category-header">
                    <img src="<?= $categoryImages[$category] ?? 'https://via.placeholder.com/200' ?>" alt="<?= htmlspecialchars($category) ?>">
                    <div class="category-info">
                        <h2><?= htmlspecialchars($category) ?></h2>
                        <p><?= $categoryDescriptions[$category] ?? '' ?></p>
                    </div>
                </div>
                
                <div class="menu-grid">
                    <?php foreach ($menus as $menu): ?>
                    <div class="menu-card">
                        <img src="<?= htmlspecialchars($menu['image_url']) ?>" alt="<?= htmlspecialchars($menu['name']) ?>">
                        <div class="menu-card-body">
                            <h3><?= htmlspecialchars($menu['name']) ?></h3>
                            <p class="description"><?= nl2br(htmlspecialchars($menu['description'])) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

        <?php endif; ?>

        <!-- HAMPERS SECTION (STATIC - NOT FROM DATABASE) -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/659/659ac3f5c1e010048e856c449c131579/Coffee_Toffee_-_Hampers_Parcel_05c_2x.jpg" alt="Hampers">
                <div class="category-info">
                    <h2>HAMPERS</h2>
                    <p>Jangan lewatkan momen istimewa orang - orang terdekatmu. Tunjukkan perhatianmu dan kirimkan satu paket penuh cinta dengan parcel yang berisi biji kopi terbaik Indonesia, racikan minuman terbaik dari Coffee Toffee serta berbagai merchandise unik.</p> <br>
                    <p>Kalian bisa pesan di gerai terdekat sesuai keinginan dengan pesan singkat menarik dan cocok buat moment Ied hampers, charity hampers, birthday hampers, christmas hampers, wedding hampers, dan lain lainnya.</p><br>
                    <p>CATATAN: Layanan hampers ini kita sediakan untuk momen perayaan tahun baru, Natal dan Idul Fitri. Apabila kamu ada momen spesial lainnya, silahkan kontak gerai Coffee Toffee terdekat dan konsultasikan kebutuhan kamu, dengan senang hati kami akan memastikan momen spesial orang terdekatmu tidak terlewatkan dengan begitu saja. 😘</p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<footer>
    <p>© 2025 Coffee Toffee - All rights reserved.</p>
</footer>

</body>
</html>
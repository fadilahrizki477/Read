<?php
session_start();

// Cegah akses langsung
if (!isset($_SESSION['login']) || $_SESSION['level'] != 0) {
    header("Location: ../login.php");
    exit;
}

require_once __DIR__ . "/../classes/Menu.php";
$menuObj = new Menu();
$menus = $menuObj->getAllMenus();
$categories = $menuObj->getAllCategories();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Menu - Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/admin_menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="admin-container">
    <header class="admin-header">
        <h1><i class="fa-solid fa-mug-hot"></i> Kelola Menu Coffee Toffee</h1>
        <div class="admin-nav">
            <a href="halamanA.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
            <a href="../index.php"><i class="fa-solid fa-home"></i> Home</a>
            <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </header>

    <div class="content-wrapper">
        <!-- ADD MENU SECTION -->
        <div class="add-section">
            <h2><i class="fa-solid fa-plus-circle"></i> Tambah Menu Baru</h2>
            <form action="proses_menu.php" method="POST" class="menu-form">
                <input type="hidden" name="action" value="add">
                
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Coffee-Based Drinks">Coffee-Based Drinks</option>
                        <option value="Non-Coffee Drinks">Non-Coffee Drinks</option>
                        <option value="Food & Snack">Food & Snack</option>
                        <option value="Coffee Pack">Coffee Pack</option>
                        <option value="Merchandise">Merchandise</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="name" placeholder="Contoh: FRAPPE BLEND" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" rows="3" placeholder="Deskripsi menu..." required></textarea>
                </div>

                <div class="form-group">
                    <label>URL Gambar</label>
                    <input type="url" name="image_url" placeholder="https://..." required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i> Tambah Menu
                </button>
            </form>
        </div>

        <!-- MENU LIST SECTION -->
        <div class="list-section">
            <h2><i class="fa-solid fa-list"></i> Daftar Menu</h2>
            
            <?php if (empty($menus)): ?>
                <div class="empty-state">
                    <i class="fa-solid fa-inbox"></i>
                    <p>Belum ada menu. Tambahkan menu pertama Anda!</p>
                </div>
            <?php else: ?>
                <?php 
                $currentCategory = '';
                foreach ($menus as $menu): 
                    if ($currentCategory != $menu['category']):
                        if ($currentCategory != '') echo '</div>'; // Close previous category
                        $currentCategory = $menu['category'];
                ?>
                        <h3 class="category-title">
                            <i class="fa-solid fa-coffee"></i> <?= htmlspecialchars($currentCategory) ?>
                        </h3>
                        <div class="menu-grid">
                <?php endif; ?>

                    <div class="menu-card">
                        <img src="<?= htmlspecialchars($menu['image_url']) ?>" alt="<?= htmlspecialchars($menu['name']) ?>">
                        <div class="menu-info">
                            <h4><?= htmlspecialchars($menu['name']) ?></h4>
                            <p><?= htmlspecialchars(substr($menu['description'], 0, 100)) ?>...</p>
                            <div class="menu-actions">
                                <button onclick="editMenu(<?= $menu['id'] ?>)" class="btn-edit">
                                    <i class="fa-solid fa-edit"></i> Edit
                                </button>
                                <button onclick="deleteMenu(<?= $menu['id'] ?>, '<?= htmlspecialchars($menu['name']) ?>')" class="btn-delete">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                </div> <!-- Close last category -->
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><i class="fa-solid fa-edit"></i> Edit Menu</h2>
        <form action="proses_menu.php" method="POST" class="menu-form">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" id="edit_id">
            
            <div class="form-group">
                <label>Kategori</label>
                <select name="category" id="edit_category" required>
                    <option value="Coffee-Based Drinks">Coffee-Based Drinks</option>
                    <option value="Non-Coffee Drinks">Non-Coffee Drinks</option>
                    <option value="Food & Snack">Food & Snack</option>
                    <option value="Coffee Pack">Coffee Pack</option>
                    <option value="Merchandise">Merchandise</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="name" id="edit_name" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" id="edit_description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>URL Gambar</label>
                <input type="url" name="image_url" id="edit_image_url" required>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-save"></i> Update Menu
            </button>
        </form>
    </div>
</div>

<script>
// Edit Menu
function editMenu(id) {
    fetch('get_menu.php?id=' + id)
        .then(response => response.json())
        .then(data => {
            document.getElementById('edit_id').value = data.id;
            document.getElementById('edit_category').value = data.category;
            document.getElementById('edit_name').value = data.name;
            document.getElementById('edit_description').value = data.description;
            document.getElementById('edit_image_url').value = data.image_url;
            document.getElementById('editModal').style.display = 'block';
        });
}

// Delete Menu
function deleteMenu(id, name) {
    if (confirm('Yakin ingin menghapus menu "' + name + '"?')) {
        window.location.href = 'proses_menu.php?action=delete&id=' + id;
    }
}

// Close Modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('editModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>
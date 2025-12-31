<?php
require_once "classes/User.php";

$user = new User();
$hasil = $user->register($_POST['username'], $_POST['password']);

if ($hasil === true) {
    echo "Registrasi berhasil! <a href='login.php'>Login</a>";
} else {
    echo $hasil . " <a href='register.php'>Kembali</a>";
}

<?php
// Mulai sesi
session_start();

// login
// Jika sudah akan diarahkan ke halaman index
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // Jika belum, pengguna diarahkan ke halaman login
    header('Location: index.php');
    exit;
}

// logout
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    // Hapus session dan diarahkan ke halaman login
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}
?>

<!-- Halaman setelah login -->
<!DOCTYPE html>
<html>

<head>
    <title>Yeay Berhasil</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <p>Login Berhasil!</p>
        <h3>Selamat datang kembali</h3>
        <a href="?logout=true" class="btn btn-danger">Logout</a>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
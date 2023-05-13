<?php
// Mulai sesi
session_start();

// Data pengguna
$validEmail = 'daysubhiz@gmail.com';
$validPassword = 'cobadulu';

// Login
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Pengguna sudah login
    header('Location: login.php');
    exit;
}

// Cek apakah form login telah diklik
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek email dan password
    if ($email === $validEmail && $password === $validPassword) {
        // Jika login berhasil, diarahkan ke halaman login
        $_SESSION['loggedIn'] = true;
        header('Location: login.php');
        exit;
        // Jika gagal, maka akan muncul notifikasi
    } elseif ($email !== $validEmail) {
        // Email tidak ditemukan
        $error = 'Email yang anda masukkan belum terdaftar.';
    } else {
        // Password salah
        $error = 'Password yang anda masukkan salah.';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <!-- link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-login">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
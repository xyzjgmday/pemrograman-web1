<?php
session_start();

// cek apakah form login sudah di-submit
if (isset($_POST['submit'])) {

    // simpan email dan password dari form login ke dalam variabel
    $email = $_POST['email'];
    $password = $_POST['password'];


    // jika email ditemukan dan password sesuai, redirect ke halaman dashboard
    if ($email == "daysubhiz@gmail.com" && $password == "password123") {
        $_SESSION['login'] = true;
        header("location: home.php");
        exit;
    }

    // jika email tidak ditemukan, tampilkan pesan error
    else if ($email != "contoh@email.com") {
        $error = "Email tidak ditemukan";
    }

    // jika password salah, tampilkan pesan error
    else {
        $error = "Password salah";
    }
}

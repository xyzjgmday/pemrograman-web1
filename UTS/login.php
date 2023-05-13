<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proses validasi login, contoh sederhana dengan data hard-coded
    if ($email == 'user@example.com' && $password == 'password') {
        // Login berhasil
        $_SESSION['email'] = $email;
        header('Location: success.php');
        exit();
    } else {
        // Cek apakah email terdaftar di sistem
        if ($email != 'user@example.com') {
            $_SESSION['error'] = 'Email not registered';
        } else {
            $_SESSION['error'] = 'Invalid password';
        }
        header('Location: index.php');
        exit();
    }
}
<?php
session_start();

// Check if the email and password are correct
if ($_POST['email'] == 'admin@example.com' && $_POST['password'] == 'password') {
    // Set the user as logged in and store the email in the session
    $_SESSION['is_logged_in'] = true;
    $_SESSION['user_email'] = $_POST['email'];
    // Redirect to the home page
    header('Location: home.php');
    exit();
} else {
    // Set the login error based on the type of error
    if ($_POST['email'] != 'admin@example.com') {
        $_SESSION['login_error'] = 'email_not_found';
    } else {
        $_SESSION['login_error'] = 'password_wrong';
    }
    // Redirect back to the login page
    header('Location: index.php');
    exit();
}

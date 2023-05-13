<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat datang di Dashboard</h2>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>
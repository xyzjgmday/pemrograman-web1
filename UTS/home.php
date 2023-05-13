<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
	// Redirect back to the login page
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page 2</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            Welcome, <?php echo $_SESSION['user_email']; ?>
            <a href="logout.php">Logout</a>
        </span>
    </nav>

    <!-- bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
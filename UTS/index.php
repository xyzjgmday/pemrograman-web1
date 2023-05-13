<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5 mb-4">Login Form</h1>
                <?php if(isset($_SESSION['login_error'])): ?>
                <?php if($_SESSION['login_error'] == 'email_not_found'): ?>
                <div class="alert alert-danger" role="alert">
                    Email not found.
                </div>
                <?php elseif($_SESSION['login_error'] == 'password_wrong'): ?>
                <div class="alert alert-danger" role="alert">
                    Incorrect password.
                </div>
                <?php endif; ?>
                <?php endif; ?>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
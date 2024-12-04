<?php
session_start();
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_data = authenticate_user($username, $password);

    if ($user_data) {
        $_SESSION['user'] = $user_data['username'];
        $_SESSION['role'] = $user_data['role'];

        // Redirect berdasarkan role
        switch ($user_data['role']) {
            case 'admin':
                header('Location: guest.php');
                break;
            case 'visitor':
                header('Location: index.php');
                break;
        }
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar</a></p> -->
        </div>
    </div>
</div>
<!-- Bootstrap JS Bundle -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

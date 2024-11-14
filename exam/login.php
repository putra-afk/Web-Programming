<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Hostel</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <img src="Hostel-logo.png" alt="Hostel Logo" class="logo">
            <h2>Login with Hostel</h2>

            <?php if (isset($error)): ?>
                <div class="error-message" style="color: red; font-weight: bold;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="login_handler.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="register.php">Don't have an account? Register</a>
            </div>
            <footer>
                <a href="#">Terms and Conditions</a> • <a href="#">Privacy Policy</a>
            </footer>
        </div>
    </div>
</body>

</html>
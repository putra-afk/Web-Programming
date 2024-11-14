<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (!empty($username) && !empty($password)) {
        $file = fopen("users.txt", "r"); // Open the users.txt file
        $isAuthenticated = false; // This will be true if user is authenticated

        // Read through the file line by line
        while (($line = fgets($file)) !== false) {
            list($storedUsername, $storedPasswordHash) = explode(",", trim($line));

            // Check if the username matches and verify the password
            if ($username == $storedUsername && password_verify($password, $storedPasswordHash)) {
                $_SESSION['username'] = $username; // Start a session for the user
                $isAuthenticated = true;
                break;
            }
        }

        fclose($file); // Close the file

        // If authentication was successful, redirect to the index page
        if ($isAuthenticated) {
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Both fields are required.";
    }
}
?>

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
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .login-box {
            width: 400px;
            margin: auto;
            padding: 30px;
            border: 1px solid #007BB5;
            border-radius: 10px;
            background-color: white;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2 class="text-center">Login</h2>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="login_handler.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="register.php">Don't have an account? Register</a>
        </div>
    </div>

</body>

</html>
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (!empty($username) && !empty($password)) {
        // Open the file for appending
        $file = fopen("users.txt", "a");

        // Save the username and password
        // Password should be hashed for security purposes
        fwrite($file, $username . "," . password_hash($password, PASSWORD_DEFAULT) . "\n");

        // Close the file
        fclose($file);

        // Redirect to login page after successful registration
        header("Location: login.php?success=1");
        exit();
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
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .register-box {
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

    <div class="register-box">
        <h2 class="text-center">Register</h2>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center mt-3">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Price - Hostel Hotel & Resort</title>
    <link rel="stylesheet" href="stylecp.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Header -->
    <header class="navbar">
        <div class="logo">Hostel Hotel & Resort</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="checkprice.php">Check Price</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <!-- Form Container -->
    <div class="container">
        <h2>Check Room Price</h2>
        <form id="priceForm">
            <div class="form-group">
                <label for="roomType">Room Type:</label>
                <select id="roomType" class="form-control" required>
                    <option value="5000">Standard (IDR 5000)</option>
                    <option value="6000">Superior (IDR 6000)</option>
                    <option value="7000">Deluxe (IDR 7000)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="days">Number of Days:</label>
                <input type="number" id="days" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label for="floor">Floor Level:</label>
                <input type="number" id="floor" class="form-control" min="1" required>
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <select id="discount" class="form-control">
                    <option value="none">None</option>
                    <option value="member">Member (10%)</option>
                    <option value="birthday">Birthday (500 off)</option>
                </select>
            </div>

            <button type="submit" class="btn-primary">Check Price</button>
        </form>

        <div id="result"></div>
    </div>

</body>

</html>
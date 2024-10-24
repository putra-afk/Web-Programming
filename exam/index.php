<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Hotel & Resort</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="colors.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Hostel Hotel & Resort</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkprice.php">Check Price</a>
                </li>

                <!-- Display Logout if the user is logged in -->
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS (Optional for navbar toggle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slider -->
    <div id="hotelCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="hotel1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="hotel2.webp" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#hotelCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hotelCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="pickup.png" alt="Pick Up & Drop" class="img-fluid" style="height: 100px;">
                <h4>Pick Up & Drop</h4>
            </div>
            <div class="col-md-3">
                <img src="parking.png" alt="Parking Space" class="img-fluid" style="height: 100px;">
                <h4>Parking Space</h4>
            </div>
            <div class="col-md-3">
                <img src="internet.png" alt="Fibre Internet" class="img-fluid" style="height: 100px;">
                <h4>Fibre Internet</h4>
            </div>
            <div class="col-md-3">
                <img src="room_service.png" alt="Room Service" class="img-fluid" style="height: 100px;">
                <h4>Room Service</h4>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        &copy; 2024 Hostel Hotel & Resort
    </footer>

    <script>
        // jQuery for slider
        $(document).ready(function() {
            $('#hotelCarousel').carousel();
        });
    </script>

</body>

</html>
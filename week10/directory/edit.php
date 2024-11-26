<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Anggota</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('koneksi.php'); // Include database connection
    $id = $_GET['id']; // Get the ID from the URL
    $query = "SELECT * FROM anggota WHERE id = $id"; // Query to fetch member data
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result); // Fetch the row data
    mysqli_close($koneksi); // Close the database connection
    ?>
    <div class="container mt-4">
        <h2>Edit Data Anggota</h2>
        <form action="proses.php" method="post">
            <!-- Hidden ID field -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <!-- Name field -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
            </div>

            <!-- Gender field -->
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki" value="L"
                        <?php if ($row['jenis_kelamin'] == 'L') echo 'checked'; ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P"
                        <?php if ($row['jenis_kelamin'] == 'P') echo 'checked'; ?> required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <!-- Address field -->
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>

            <!-- Phone number field -->
            <div class="form-group">
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    // Allow PDF, DOCX, and common image formats
    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "pdf", "docx");
    $maxsize = 3 * 1024 * 1024; // Set maximum size to 3MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.<br>";

            // Display thumbnail only for images
            if (in_array($fileType, array("jpg", "jpeg", "png", "gif"))) {
                echo "<img src='" . $targetfile . "' style='width: 200px; height: auto;' alt='Thumbnail'>";
            } else {
                echo "File berhasil diunggah: <a href='" . $targetfile . "' target='_blank'>Lihat file</a>";
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

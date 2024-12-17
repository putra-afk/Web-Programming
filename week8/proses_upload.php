<?php
$targetDirectory = "documents/";

// Check if the target directory exists, if not, create it
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Allowed image file types
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalfiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalfiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $fileType = $_FILES['files']['type'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Validate file type (only allow images)
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File <strong>$fileName</strong> berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file <strong>$fileName</strong>.<br>";
            }
        } else {
            echo "File <strong>$fileName</strong> bukan gambar yang diperbolehkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

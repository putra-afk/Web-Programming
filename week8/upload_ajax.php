<?php
$targetDirectory = "documents/"; // Directory to save uploaded files
$allowedExtensions = array("jpg", "jpeg", "png", "gif", "pdf", "txt"); // Allowed file types

// Ensure the 'documents' directory exists
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files'])) {
    $errors = array();
    $fileCount = count($_FILES['files']['name']); // Total number of uploaded files

    // Iterate through each uploaded file
    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate file extension
        if (!in_array($fileExt, $allowedExtensions)) {
            $errors[] = "File <strong>$fileName</strong> memiliki ekstensi yang tidak diperbolehkan.";
            continue;
        }

        // Validate file size (max 2 MB)
        if ($fileSize > 2097152) {
            $errors[] = "File <strong>$fileName</strong> terlalu besar. Maksimum ukuran adalah 2MB.";
            continue;
        }

        // Move the uploaded file to the target directory
        $targetFilePath = $targetDirectory . basename($fileName);
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            echo "<p>File <strong>$fileName</strong> berhasil diunggah.</p>";
        } else {
            $errors[] = "Gagal mengunggah file <strong>$fileName</strong>.";
        }
    }

    // Print errors if any
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Document</title>
</head>

<body>
    <h2>Unggah Document</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .docx, .doc, image/*">
        <input type="submit" value="Unggah" />
    </form>
</body>

</html>
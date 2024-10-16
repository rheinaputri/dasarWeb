<!-- <!DOCTYPE html>
<html>
<head>
    <title>Multi-upload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Multi-upload Gambar</title> <!-- Mengubah judul -->
</head>
<body>
    <h2>Unggah Gambar</h2> <!-- Mengubah teks judul -->
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif" /> <!-- Mengubah name menjadi 'images[]' dan mengubah accept untuk gambar -->
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>

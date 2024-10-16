<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        
        // Mengambil ekstensi file
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Menggunakan pathinfo untuk mengambil ekstensi file
        
        // Daftar ekstensi gambar yang diizinkan
        $extensions = array("jpg", "jpeg", "png", "gif");
        
        // Memeriksa apakah ekstensi file diizinkan
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "<br>Ekstensi file yang diizinkan untuk gambar adalah JPG, JPEG, PNG, atau GIF untuk file $file_name.";
        }
        
        // Memeriksa ukuran file
        if ($file_size > 2097152) { // Maksimal 2 MB
            $errors[] = "<br>Ukuran file $file_name tidak boleh lebih dari 2 MB.";
        }
        
        // Jika tidak ada error, pindahkan file ke direktori tujuan
        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
                echo "<br>File $file_name berhasil diunggah.";
            } else {
                echo "<br>Gagal mengunggah file $file_name.";
            }
        } else {
            echo implode("<br>", $errors); // Menampilkan error
        }
    }
} else {
    echo "<br>Tidak ada file yang diunggah.";
}
?>

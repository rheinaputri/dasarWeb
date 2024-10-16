<!-- <?php
// Lokasi penyimpanan file yang diunggah
// $targetDirectory = "documents/";

// // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
// if (!is_dir($targetDirectory)) {
//     mkdir($targetDirectory, 0777, true);
// }

// if ($_FILES['files']['name'][0]) {
//     $totalFiles = count($_FILES['files']['name']);
    
//     // Loop melalui semua file yang diunggah
//     for ($i = 0; $i < $totalFiles; $i++) {
//         $fileName = $_FILES['files']['name'][$i];
//         $targetFile = $targetDirectory . $fileName;

//         // Pindahkan file yang diunggah ke direktori penyimpanan
//         if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
//             echo "File $fileName berhasil diunggah.<br>";
//         } else {
//             echo "Gagal mengunggah file $fileName.<br>";
//         }
//     }
// } else {
//     echo "Tidak ada file yang diunggah.";
// }
?> -->

<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads/"; // Mengubah direktori menjadi "uploads/"

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['images']['name'][0]) { // Mengubah 'files' menjadi 'images'
    $totalFiles = count($_FILES['images']['name']);
    
    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName); // Menambahkan basename untuk keamanan

        // Menentukan jenis file
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Mengubah ekstensi untuk gambar

        // Validasi jenis file
        if (in_array($fileType, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>"; // Mengubah pesan menjadi untuk gambar
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>"; // Mengubah pesan menjadi untuk gambar
            }
        } else {
            echo "File $fileName bukan gambar yang valid.<br>"; // Pesan validasi untuk jenis file
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah."; // Mengubah pesan untuk gambar
}
?>


<!-- <?php
// if (isset($_POST["submit"])) {
//     $targetdir = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

//     if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
//         echo "File berhasil diunggah.";
//     } else {
//         echo "Gagal mengunggah file.";
//     }
// }
?> -->


<!-- prak1 soal 3 -->
<!-- <?php
// if (isset($_POST["submit"])) {
//     $targetdir = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxsize = 5 * 1024 * 1024; // Maksimum ukuran file 5MB

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
//             echo "File berhasil diunggah.";

//             // Tambahan: Menampilkan thumbnail gambar
//             echo '<br><img src="' . $targetfile . '" alt="Thumbnail" style="width: 200px; height: auto;">'; // Menampilkan gambar thumbnail
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }
?> -->

<!-- soal 6 -->
<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; // Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3 * 1024 * 1024; // Maksimum ukuran file 3MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = []; // Inisialisasi jika tidak ada warna yang dipilih
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
} else {
    echo "Tidak ada data yang dikirim.";
}
?>

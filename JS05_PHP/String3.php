<!-- <?php
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

?> -->

<?php

$pesan = "saya arek malang";
// ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
// ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($kata) => strrev($kata), $pesanPerKata); // Menggunakan $kata sebagai parameter
// gabungkan kembali array menjadi string dengan spasi
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>

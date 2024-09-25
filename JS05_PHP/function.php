<!-- <?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Rheina Putri Ferdiansyah<br/>"; 
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan();
// perkenalan();
?> -->

<!-- <?php
//membuat fungsi
// function perkenalan ($nama, $salam) {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan ("Rheina", "Hallo");

// echo "<hr>";
// $saya = "Putri";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan ($saya, $ucapanSalam);
?> -->

<?php
// Membuat fungsi
function perkenalan($nama, $salam) { 
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Rheina", "Hallo");
echo "<hr>";

$saya = "Rheina";
$ucapanSalam = "Selamat pagi";

// Memanggil lagi tanpa mengisi parameter salam
perkenalan($saya, $ucapanSalam); // Memanggil dengan parameter salam
// perkenalan($saya); // Memanggil tanpa parameter salam
?>

<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Hasil Penjumlahan (a + b): {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b): {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b): {$hasilKali} <br>";
echo "Hasil Pembagian (a / b): {$hasilBagi} <br>";
echo "Sisa Pembagian (a % b): {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b): {$pangkat} <br>";

echo "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR (a || b): " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT a (!$a): " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT b (!$b): " . ($hasilNotB ? 'True' : 'False') . "<br>";


echo "<br>";
echo "<br>";

$a += $b;
echo "Hasil a += b: {$a} <br>";

$a -= $b;
echo "Hasil a -= b: {$a} <br>";

$a *= $b;
echo "Hasil a *= b: {$a} <br>";

$a /= $b;
echo "Hasil a /= b: {$a} <br>";

$a %= $b;
echo "Hasil a %= b: {$a} <br>";

echo "<br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b (a === b)? " . ($hasilIdentik ? 'True' : 'False') . "<br>";
echo "Apakah a tidak identik dengan b (a !== b)? " . ($hasilTidakIdentik ? 'True' : 'False') . "<br>";

echo "<br>";
// contoh soal 

echo "Studi Kasus No. 16 <br>";
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi; // hitung jumlah kursi kosong
$porsiKursiKosong = ($kursiKosong / $totalKursi) * 100; // hitung persen kursi kosong

echo "Jumlah kursi kosong: {$kursiKosong} <br>"; //menampilkan
echo "Persentase kursi kosong: {$porsiKursiKosong}% <br>";


?>



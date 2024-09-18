<?php
$nilaiNumerik = 92;


if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) { 
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) { 
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) { 
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";
echo "<br>";


$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
echo "<br>"; 

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>"; 

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";


echo "<br>";
echo "<br>"; 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}


echo "<br>";
echo "<br>"; 

// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dari yang terendah ke tertinggi
$urut = sort($nilaiSiswa);
echo "urutan : ". implode(', ', $nilaiSiswa);

// Hapus dua nilai terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

// Hapus dua nilai tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Hitung total nilai yang tersisa
$totalNilai = array_sum($nilaiSiswa);
echo "<br>"; 

// Tampilkan hasil total nilai
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";



echo "<br>";
echo "<br>";


$hargaProduk = 120000;
$diskonPersen = 20;

// Mengecek apakah harga memenuhi syarat untuk diskon
if ($hargaProduk > 100000) {
    // Hitung jumlah diskon
    $jumlahDiskon = ($diskonPersen / 100) * $hargaProduk;
    // Hitung harga setelah diskon
    $hargaAkhir = $hargaProduk - $jumlahDiskon;
} else {
    // Tidak ada diskon
    $hargaAkhir = $hargaProduk;
}

// Tampilkan harga yang harus dibayar
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . ($hargaAkhir);


echo "<br>";
echo "<br>";


// Skor poin pemain
$poin = 550; //bisa diganti

// Mengecek apakah poin lebih dari 500
$hadiahTambahan = ($poin > 500) ? 'YA' : 'TIDAK';

// Menampilkan total skor dan apakah pemain mendapatkan hadiah tambahan?
echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";


?>

<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

// Mengambil nilai yang lulus
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

// Menampilkan nilai yang lulus
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);


echo "<br>";
echo "<br>";

$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarkaryawan as $karyawan) {
        if ($karyawan [1] > 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }

    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', 
    $karyawanPengalamanLimaTahun);

    echo "<br>";
    echo "<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$matakuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $matakuliah: <br>";

foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}


// Data nilai siswa
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

echo "<br>";
echo "<br>";

// Hitung total nilai
$totalNilai = 0;
foreach ($nilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

// Hitung rata-rata nilai
$jumlahSiswa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;

// Tampilkan nilai di atas rata-rata
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata ($rataRata): <br>";

foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}


?>

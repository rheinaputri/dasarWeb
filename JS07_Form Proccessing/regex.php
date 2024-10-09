<?php
// langkah 6
$pattern = '/[0-9]+/'; 
$text = 'This are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan angka: " . $matches[0] . "<br>"; // Menampilkan angka yang ditemukan
} else {
    echo "Tidak ada angka!<br>";
}

//langkah 10
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>"; // Output: "I like banana pie."

//langkah14
// $pattern = '/go?d/';
// $text = 'god is good.';

// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0] . "<br>"; // Menampilkan kata yang cocok dengan pola "god" atau "gd"
// } else {
//     echo "Tidak ada yang cocok!<br>";
// }

$pattern = '/go{1,2}d/';
$text = 'god is good and goood.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Menampilkan kata yang cocok dengan pola "god" atau "good"
} else {
    echo "Tidak ada yang cocok!<br>";
}
?>

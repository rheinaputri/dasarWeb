<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <!-- <?php
    // $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    // echo $Listdosen[2] . "<br>";
    // echo $Listdosen[0] . "<br>";
    // echo $Listdosen[1] . "<br>";

    ?> -->

    
<?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    
        // Menggunakan loop for untuk menampilkan semua elemen array
        for ($i = 0; $i < count($Listdosen); $i++) {
            echo $Listdosen[$i] . "<br>";
        }

         
        // $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        //     foreach ($Listdosen as $dosen) {
        //         echo $dosen . "<br>";
        //     }
        
        ?>
    
</body>
</html>
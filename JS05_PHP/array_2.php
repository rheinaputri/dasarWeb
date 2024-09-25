<html lang="en">
<head>
   <title>Document</title>
   <style>
    table{
            width: 50%;
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            border: 1px solid darkslategrey ;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2; /* Warna latar belakang untuk header */
        }
        
   </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];

        echo "Nama \t: {$Dosen ['nama']} <br>";
        echo "Domisili \t: {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin \t: {$Dosen ['jenis_kelamin']} <br>";

    ?>
<br><br>
    <table>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>

        <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
        </tr>

        <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
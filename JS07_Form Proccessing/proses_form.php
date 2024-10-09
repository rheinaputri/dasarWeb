<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    
    <form method="post" action="">
        <label for="nama">Nama: </label>
        <input type="text" name="name" id="nama" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Memproses data setelah form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["name"]; // Menggunakan 'name' sesuai dengan input pada form
        $email = $_POST["email"];

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    }
    ?>
</body>
</html>

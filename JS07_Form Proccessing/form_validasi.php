<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> 
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        var nama = $("#nama").val(); // Memperbaiki selector dari "irnama" ke "#nama"
        var email = $("#email").val();
        var valid = true;

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi."); // Memperbaiki pesan error
            valid = false; // Memperbaiki penugasan ke valid
        } else {
            $("#nama-error").text(""); // Menghapus pesan error jika valid
        }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi."); // Memperbaiki pesan error
            valid = false; // Memperbaiki penugasan ke valid
        } else {
            $("#email-error").text(""); // Menghapus pesan error jika valid
        }

        // Jika validasi gagal, hentikan pengiriman form
        if (!valid) {
            event.preventDefault(); // Memperbaiki penulisan preventDefault
        }
    });
});
</script>


</body>
</html> -->

<!-- menggunakan ajax -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var password = $("#password").val();
                var valid = true;

                // Validasi Password
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika validasi gagal, hentikan pengiriman form
                if (!valid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <span id="password-error" style="color: red;"></span> <!-- Tempat untuk menampilkan pesan error -->
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');

        echo "<h3>Nama yang diterima:</h3>";
        echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3>Email yang diterima:</h3>";
            echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "<h3>Email tidak valid!</h3>";
        }

        // Memeriksa password
        $password = $_POST['password'];
        if (strlen($password) < 8) {
            echo "<h3>Password tidak valid!</h3>";
        } else {
            echo "<h3>Password diterima.</h3>";
        }
    }
    ?>
</body>
</html>


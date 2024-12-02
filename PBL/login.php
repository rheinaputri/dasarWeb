<?php
include('lib/Session.php');  // Memasukkan file Session.php untuk sesi pengguna

$session = new Session();  // Membuat objek sesi

// Jika pengguna sudah login, arahkan ke halaman index.php
if ($session->get('is_login') === true) {
  header('Location: index.php');
  exit();  // Menghentikan eksekusi lebih lanjut setelah redirect
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PresMa - Login</title>

  <!-- Menyertakan Google Font Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Menyertakan file CSS dari AdminLTE -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  
  <!-- Menyertakan file CSS eksternal -->
  <!-- <link rel="stylesheet" href="css/stylelogin.css"> -->
</head>

<body class="hold-transition login-page" style="background-color:#356CEA;">
  <div class="login-box">
    <div class="card card-outline card-primary" style="border-radius: 20px;">
      <div class="card-header text-center" style="margin: 10px;">
        <a href="/" class="h1" style="font-size: 25px;"><b>Prestasi </b>Mahasiswa</a>
      </div>

      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <!-- Menampilkan pesan flash jika login gagal -->
        <?php
        $status = $session->getFlash('status');
        if ($status === false) {
          $message = $session->getFlash('message');
          echo '<div class="alert alert-warning">' . $message .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>';
        }
        ?>

        <!-- Form login -->
        <form action="action/auth.php?act=login" method="post" id="form-login">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <!-- Checkbox untuk mengingat pengguna -->
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>

            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>

          <!-- Link ke halaman registrasi jika pengguna belum memiliki akun -->
          <div class="haveaccount col-12">
            <div style="height: 10px;"></div>
            <p class="text-center">Don't have account? <a href="#register">Register here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminlte/dist/js/adminlte.min.js"></script>
  <script src="adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
  <script src="adminlte/plugins/jquery-validation/localization/messages_id.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#form-login').validate({
        rules: {
          username: {
            required: true,
            minlength: 3,
            maxlength: 20
          },
          password: {
            required: true,
            minlength: 5,
            maxlength: 255
          }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>

</html>

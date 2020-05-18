<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
              document.location.href = 'registrasi.php';
            </script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="../css/registrasi.css">

  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Store</title>
  <link rel="icon" href="../assets/img/icon.png" class="responsive-img">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col m6 s12 gambar">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="../assets/img/woman3.jpg">
              <div class="caption center-align">
                <h4>Selamat Datang</h4>
                <h5 class="light grey-text text-lighten-3">Silakan isi form disamping</h5>
              </div>
            </li>
            <li>
              <img src="../assets/img/woman4.jpg">
              <div class="caption left-align">
                <h4>Dapatkan diskon 30%</h4>
                <h5 class="light grey-text text-lighten-3">tanggal 2 - 10 Juni</h5>
              </div>
            </li>
            <li>
              <img src="../assets/img/woman5.jpg">
              <div class="caption right-align">
                <h4>Lengkap!</h4>
                <h5 class="light grey-text text-lighten-3">Tersedia berbagai<br> jenis buku</h5>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col m6 s12 regis">
        <form action="" method="POST">
          <div class="card-panel">
            <h3>Register</h3>
            <div class="input-field">
              <input placeholder="Username" type="text" name="username" id="username" required autocomplete="off" autofocus>
              <label for="username"></label>
            </div>
            <div class="input-field">
              <input placeholder="Password" type="password" name="password1" id="password" required>
              <label for="password1"></label>
            </div>
            <p><span style="color: red">*</span> Gunakan minimal 8 angka dengan campuran huruf, angka, dan simbol</p>
            <div class="input-field">
              <input placeholder="Konfirmasi Password" type="password" name="password2" id="password" required>
              <label for="password2"></label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="register">SIGN UP</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 600,
      duration: 500,
      interval: 3000
    });
  </script>
</body>

</html>
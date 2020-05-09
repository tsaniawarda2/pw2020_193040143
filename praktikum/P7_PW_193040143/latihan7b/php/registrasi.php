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
              document.location.href = 'login.php';
            </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <!-- MY CSS -->
  <link rel="stylesheet" href="../css/registrasi.css">
  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Latihan 7b</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST">
      <div class="card-panel">
        <h5>Selamat Datang di Bookstore</h5>
        <div class="input-field">
          <input type="text" name="username" id="username" required autocomplete="off">
          <label for="username">Username</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="register">REGISTER</button>
    </form>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>
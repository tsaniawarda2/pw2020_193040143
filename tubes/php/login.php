<?php
session_start();
require 'functions.php';
// melakukan pengechekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location : admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
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
  <link rel="stylesheet" href="../css/login.css">

  <!-- MY FONTS -->
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
      <div class="col m6 s12 diskon">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="../assets/img/woman1.jpg">
            </li>
            <li>
              <img src="../assets/img/woman2.jpg">
            </li>
          </ul>
        </div>
      </div>
      <div class="col m6 s12 login">
        <div class="card-panel">
          <form action="" method="POST">
            <?php if (isset($error)) : ?>
              <p class="salah">Username atau Password salah</p>
            <?php endif; ?>
            <h3>Login</h3>
            <div class="input-field">
              <input placeholder="Username" type="text" name="username" id="username" required autocomplete="off" autofocus>
              <label for="username"></label>
            </div>
            <div class="input-field">
              <input placeholder="Password" type="password" name="password" id="password" required>
              <label for="password"></label>
            </div>
            <div class="remember">
              <label>
                <input type="checkbox" name="remember" />
                <span>Remember me</span>
              </label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Sig In</button>
            <div class="registrasi">
              <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
          </form>
        </div>
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
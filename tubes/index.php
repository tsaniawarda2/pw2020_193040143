<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
$buku = query("SELECT * FROM buku");

// ketika tombol cari diklik
if (isset($_GET['cari'])) {
  $buku = cari($_GET['keyword']);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="css/index.css">

  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@1,700&display=swap" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Store</title>
  <link rel="icon" href="assets/img/icon.png" class="responsive-img">
</head>

<body>
  <!-- Navbar -->
  <section id="navbar" class="navbar-fixed scrollspy">
    <nav class="grey lighten-1">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#navbar" class="brand-logo"><img src="assets/img/logo.png"></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#books">All Books</a></li>
            <li><a href="php/login.php">Login</a></li>
            <li><a href="php/admin.php"><i class="material-icons">person</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!-- Sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">About Us</a></li>
    <li><a href="#books"><i class="material-icons">list</i>All Books</a></li>
    <li><a href="php/login.php"><i class="material-icons">exit_to_app</i>Login</a></li>
    <li><a href="php/admin.php"><i class="material-icons">person</i>Admin</a></li>
  </ul>

  <!-- Slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/2.jpg">
        <div class="caption center-align">
          <h3>Leviosa Store toko buku terlengkap<br>di Indonesia</h3>
        </div>
      </li>
      <li>
        <img src="assets/img/1.jpg">
        <div class="caption left-align">
          <h3>Lindungi diri dan sesama dari CORONA</h3>
          <h5 class="light grey-text text-lighten-3">Selalu Cuci tangan dan Pakai masker saat bepergian ke luar</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/3.jpg">
        <div class="caption right-align">
          <h3>'Books are like mirrors: if a fool looks in, you cannot expect a genius to look out.'</h3>
          <h5 class="light grey-text text-lighten-3">-J.K. Rowling-</h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- Container -->
  <div class="container">
    <!-- About -->
    <section id="about" class="about scrollspy">
      <div class="row">
        <div class="col m6 s12">
          <img src="assets/img/store.jpg">
        </div>
        <div class="col m6 s12">
          <h1>About Us</h1>
          <h4>Didirikan oleh Tsania Warda pada tahun 2020. Asal mula nama Leviosa sendiri terinspirasi dari mantra di film Harry Potter yaitu Wingardium Leviosa fungsinya untuk membuat suatu benda melayang.
            <br>
            <br>
            Leviosa Store adalah toko buku terlengkap yang menjual buku secara offline atau online. Leviosa Store sudah membuka beberapa cabang di Indonesia, terletak di Bandung, Jakarta, dan Madura</h4>
        </div>
      </div>
    </section>

    <!-- Search -->
    <section id="search" class="search">
      <div class="row center">
        <div class="col s12">
          <form action="" method="GET">
            <div class="input-field">
              <input type="search" name="keyword" size="40" placeholder="Cari Judul, Penulis, dan Tahun Terbit disini..." autocomplete="off" class="keyword">
              <button type="submit" name="cari" class="tombol-cari"></button><i class="material-icons">search</i>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Books -->
    <section id="books" class="books scrollspy">
      <div class="row buku">
        <h1>All Books</h1>
        <?php foreach ($buku as $daftar) : ?>
          <div class="col m3 s6">
            <div class="klik">
              <!-- Buku -->
              <div class="gambar">
                <img src="assets/img/<?= $daftar["Gambar"]; ?>">
              </div>
              <div class="judul">
                <h4 style="text-decoration: none">
                  <?= $daftar["Judul"]; ?>
                </h4>
              </div>
              <div class="penulis">
                <h4><?= $daftar["Penulis"] ?></h4>
              </div>
              <div class="tombol">
                <a class="btn waves-effect waves-light" href="php/detail.php?id=<?= $daftar['No']; ?>">Details</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <section id="info" class="info grey lighten-3 black-text">
    <div class="container">
      <div class="row info">
        <div class="col m3 s12 aboutus">
          <h6>About Us</h6>
          <p>Leviosa Store termasuk toko buku terlengkap di Indonesia yang menyediakan berbagai macam buku.</p>
        </div>
        <div class="col m3 s12">
          <h6>Customer Service</h6>
          <h5>(022) 2936452</h5>
          <p>Buka : 10:00 - 18:00</p>
          <p>Istirahat : 12:00 - 13:00</p>
          <p>Weekend/Hari Libur Tutup</p>
        </div>
        <div class="col m3 s12">
          <div class="bank">
            <h6>Pembayaran</h6>
            <img src="assets/img/logo/bni.png">
            <img src="assets/img/logo/bca.png">
            <img src="assets/img/logo/bjb.png">
            <img src="assets/img/logo/bri.png">
            <img src="assets/img/logo/mandiri.png">
            <img src="assets/img/logo/gopay.png">
          </div>
          <div class="kirim">
            <h6>Pengiriman</h6>
            <img src="assets/img/logo/jne.png" width="40">
            <img src="assets/img/logo/jnt.png" width="60">
            <img src="assets/img/logo/pos.png" width="30">
          </div>
        </div>
        <div class="col m2 s12">
          <div class="follow">
            <h6>Join Us On Sosial</h6>
            <a href="https://www.facebook.com/aiubracelets/" target="_blank"><img src="assets/img/logo/facebook.png"></a>
            <a href="https://twitter.com/raveeamade" target="_blank"><img src="assets/img/logo/twitter.png"></a>
            <a href="https://www.instagram.com/aiumade/" target="_blank"><img src="assets/img/logo/instagram.png"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="grey lighten-3">
    <div class="container">
      <p>Company Name : Bücher TsA Group | CEO : Tsania Warda | Customer Service : (022) 2936452 | Location : Jln.Cempaka No 20, Bandung, Jawa Barat, Indonesia | Email : bunchertsa@bunchertsa.com</p>
    </div>
    <hr>
    <p class="copy">Copyright &copy 2020 Leviosa - All Right Reserved.</p>
  </footer>





  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/script1.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 537,
      duration: 500,
      interval: 3000
    });

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 80
    });
  </script>
</body>

</html>
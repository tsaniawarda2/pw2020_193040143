<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $buku = cari($_GET['keyword']);
} else {
  $buku = query("SELECT * FROM buku");
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
  <link rel="stylesheet" href="../css/admin.css">

  <!-- MY FONTS -->

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Story</title>
</head>

<body>
  <!-- Dropdown -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="tambah.php">Add Books</a></li>
    <li><a href="admin.php">List Books</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="registrasi.php">Add Admin</a></li>
  </ul>

  <!-- Navbar -->
  <section id="navbar" class="navbar-fixed">
    <nav class="light grey">
      <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        <div class="container">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="dashboard.php">Dashboard</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Books<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="logout.php" class="btn transparent logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!-- Sidenav -->
  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="../assets/img/book.jpg">
        </div>
        <img class="circle" src="../assets/img/nophoto.png" width="120" style="display: block;">
        <span class="white-text name"><?= $_SESSION['username']; ?></span>
        <span class="white-text">Welcome to page admin</span>
      </div>
    </li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_dash">
        <div id="dash_dash_header">
          <a class="collapsible-header waves-effect" style="text-decoration: none; color:black;" href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        </div>
      </li>
      <li id="dash_books">
        <div id="dash_books_header" class="collapsible-header waves-effect"><i class="material-icons">book</i>Books</div>
        <div id="dash_books_body" class="collapsible-body">
          <ul>
            <li id="books_add">
              <a class="waves-effect" style="text-decoration: none;" href="tambah.php"><i class="material-icons">add</i>Add Books</a>
            </li>
            <li id="books_list">
              <a class="waves-effect" style="text-decoration: none;" href="admin.php"><i class="material-icons">list</i>List Books</a>
            </li>
          </ul>
        </div>
      </li>
      <li id="dash_admin">
        <div id="dash_admin_header" class="collapsible-header waves-effect"><i class="material-icons">person</i>Admin</div>
        <div id="dash_admin_body" class="collapsible-body">
          <ul>
            <li id="admin_add">
              <a class=" waves-effect" style="text-decoration: none;" href="registrasi.php"><i class="material-icons">person_add</i>Add Admin</a>
            </li>
            <li id="admin_report">
              <a class=" waves-effect" style="text-decoration: none;" href="report.php" target="blank"><i class="material-icons">print</i>Report</a>
            </li>
          </ul>
        </div>
      </li>
      <li id="dash_logout">
        <div id="dash_logout_header" \>
          <a class="collapsible-header waves-effect" style="text-decoration: none; color:black;" href="logout.php"><i class="material-icons">exit_to_app</i>Logout</a>
        </div>
      </li>
    </ul>
  </ul>

  <!-- Search -->
  <section id="search" class="section-search scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <form action="" method="GET">
            <div class="input-field">
              <input type="search" name="keyword" size="40" placeholder="Cari Judul, Penulis, dan Tahun Terbit disini..." autocomplete="off" class="keyword">
              <button type="submit" name="cari" class="tombol-cari">Cari!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Books -->
  <div class="container">
    <div class="row">
      <div class="col m3 s6">
        <div class="card-panel">
          <h3>Admin</h3>
        </div>
      </div>
      <div class="col m3 s6">
        <div class="card-panel">

        </div>
      </div>
      <div class="col m3 s6">
        <div class="card-panel">

        </div>
      </div>
      <div class="col m3 s6">
        <div class="card-panel">

        </div>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const dropdown = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(dropdown, {
      alignment: 'right',
      hover: true,
      coverTrigger: false
    });

    const collapsible = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsible);
  </script>
</body>

</html>
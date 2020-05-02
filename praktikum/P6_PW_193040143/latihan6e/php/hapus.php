<?php
require 'functions.php';
$id = $_GET['id'];

if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

if (hapus($id) > 0) {
  echo "<script>
              alert('Data Berhasil Dihapus!');
              document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
              alert('Data Gagal Dihapus!');
              document.location.href = 'admin.php';
          </script>";
}

<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040143") or die("Database salah!");

    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['Gambar']['name'];
    $tipe_file = $_FILES['Gambar']['type'];
    $ukuran_file = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmp_file = $_FILES['Gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('Yang Anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Yang Anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // ukuran file
    // maks 5Mb
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran Gambar terlalu besar!');
            </script>";
        return false;
    }

    // upload file yang lolos
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}
// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $judul = htmlspecialchars($data['Judul']);
    $penulis = htmlspecialchars($data['Penulis']);
    $sinopsis = htmlspecialchars($data['Sinopsis']);
    $tahun_terbit = htmlspecialchars($data['TahunTerbit']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO buku
                        VALUES
                        (null, '$gambar', '$judul', '$penulis', '$sinopsis', '$tahun_terbit', '$harga')";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data didalam database
function hapus($id)
{
    $conn = koneksi();

    // hapus di folder
    $bk = query("SELECT * FROM buku WHERE No  = $id")[0];
    if ($bk['Gambar'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $bk['Gambar']);
    }


    mysqli_query($conn, "DELETE FROM buku WHERE No = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data didalam database
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['No']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $judul = htmlspecialchars($data['Judul']);
    $penulis = htmlspecialchars($data['Penulis']);
    $sinopsis = htmlspecialchars($data['Sinopsis']);
    $tahun_terbit = htmlspecialchars($data['Tahun_Terbit']);
    $harga = htmlspecialchars($data['Harga']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.jpg') {
        $gambar = $gambar_lama;
    }
    $query = "UPDATE buku
            SET
            Gambar = '$gambar',
            Judul = '$judul',
            Penulis = '$penulis', 
            Sinopsis = '$sinopsis',
            Tahun_Terbit = '$tahun_terbit',
            Harga = '$harga'
            WHERE No = '$id'
            ";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku WHERE 
            Judul LIKE '%$keyword%' OR
            Penulis LIKE '%$keyword%' OR
            Tahun_Terbit LIKE '%$keyword%' ";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
              </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
          alert('Konfirmasi password tidak sesuai!');
          document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika password < 8 digit
    if (strlen($password1) < 8) {
        echo "<script>
            alert('Password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password1, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUE(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

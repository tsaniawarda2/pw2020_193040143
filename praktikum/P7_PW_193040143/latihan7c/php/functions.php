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

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['Gambar']);
    $judul = htmlspecialchars($data['Judul']);
    $penulis = htmlspecialchars($data['Penulis']);
    $sinopsis = htmlspecialchars($data['Sinopsis']);
    $tahun_terbit = htmlspecialchars($data['TahunTerbit']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO buku
                        VALUES
                        ('', '$gambar', '$judul', '$penulis', '$sinopsis', '$tahun_terbit', '$harga')";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data didalam database
function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM buku WHERE No = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data didalam database
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['No']);
    $gambar = htmlspecialchars($data['Gambar']);
    $judul = htmlspecialchars($data['Judul']);
    $penulis = htmlspecialchars($data['Penulis']);
    $sinopsis = htmlspecialchars($data['Sinopsis']);
    $tahun_terbit = htmlspecialchars($data['Tahun_Terbit']);
    $harga = htmlspecialchars($data['Harga']);

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

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUE('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

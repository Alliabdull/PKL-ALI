<?php
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
     // ambil data dari tiap elemen dalam form
      $nama = $_POST["nama"];
      $nrp = $_POST["nrp"];
      $email = $_POST["email"];
      $jurusan = $_POST["jurusan"];
      $gambar = $_POST["gambar"];

    // query insert data
    $query= "INSERT INTO mahasiswa
               VALUES
             ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
             ";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
                
        </ul>

    </form>

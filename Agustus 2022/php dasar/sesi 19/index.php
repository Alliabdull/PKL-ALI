<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}



require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus
    placeholder="Masukan Keyword Pencarian.." autocomplete="off"> 
    <button type="submit" name="cari">Cari!</button>

</form>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>No.</td>
        <td>Aksi</td>
        <td>Gambar</td>
        <td>NRP</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Jurusan</td>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
        <td><?= $i ; ?> </td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');">hapus</a>
        </td>

        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT  * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()
// while ( $mhs = mysqli_fetch_assoc($result) ) { 
// var_dump($mhs[1]);
// }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

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

    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $row["id"]; ?> </td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>

        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
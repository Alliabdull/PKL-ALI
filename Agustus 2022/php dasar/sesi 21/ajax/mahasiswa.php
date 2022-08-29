<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query =  "SELECT * FROM mahasiswa
             WHERE
           nama LIKE '%$keyword%' OR
           nrp LIKE '%$keyword%' OR
           email LIKE '%$keyword%' OR
           jurusan LIKE '%$keyword%' 
        ";
$mahasiswa = query($query);
?>
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

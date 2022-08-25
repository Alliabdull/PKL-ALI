<?php
$mahasiswa = [
            ["Ali Abdul Rokhim", "082132123788", "Teknik Informatika", "alliabdullrokhim@gmail.com"],
            ["Wafa didi mustofs", "081098765432", "Teknik Informatika", "wafadidi@gmail.com"],
            ["aldenta dwg", "081234567890", "Teknik Informatika", "aldenta_dwg@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
    <li>Nama : <?= $mhs[0];?></li>
    <li>No.HP : <?= $mhs[1];?></li>
    <li>Jurusan : <?= $mhs[2];?></li>
    <li>Email : <?= $mhs[3];?></li>
</ul>
<?php endforeach; ?>
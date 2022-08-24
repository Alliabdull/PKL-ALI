<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Ali Abdul Rokhim",
        "nrp" => "082132123788",
        "email" => "alliabdullrokhim@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "pap.jpg.jpg"
    ],
    [
        "nama" => "Kerajagoan",
        "nrp" => "089123213321",
        "email" => "Kerakece@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "sepatu.jpg.jpg"        
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>

        <li><img src="img/<?= $mhs["gambar"]; ?> "></li>    
        <li> <a href="latihan2get.php?nama=<?= $mhs["nama"];?>&nrp=
        <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>&jurusan=
        <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach;?>
</ul>



















?>
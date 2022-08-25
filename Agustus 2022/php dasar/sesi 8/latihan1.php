<?php
// $mahasiswa = [
// ["Ali Abdul Rokhim", "082132123788", "alliabdullrokhim@gmail.com", "Teknik Informatika"],
// ["089123213321", "Kera Jagoan", "Kerakece@gmail.com", "Teknik Gedang"]
// ];

// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        "nrp" => "089132312321",
        "email" => "Kerakece@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "sepatu.jpg.jpg"
        
        
    ]
];


?>

<!DOCTYPE html>
<html>
<head>   
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa<h1>
        
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>

            <li>Nama : <?=$mhs["nama"]; ?></li>
            <li>nrp : <?=$mhs["nrp"]; ?></li>
            <li>jurusan : <?=$mhs["jurusan"]; ?></li>
            <li>email : <?=$mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

    </body>
    </html>














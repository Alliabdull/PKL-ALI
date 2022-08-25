<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }    
    return $rows;
}

$mahasiswa = query("SELECT * FROM mahasiswa");


function tambah($id) {
    global $conn;
    
    $id = $data[""];
    $nama = htmlspechialchars($data["nama"]);
    $nrp = htmlspechialchars($data["nrp"]);
    $email = htmlspechialchars($data["email"]);
    $jurusan = htmlspechialchars($data["jurusan"]);
    $gambar = htmlspechialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa
               VALUES
              ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar'
                 ') 
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($id) {
    global $conn;
    
    $id = $data[""];
    $nama = htmlspechialchars($data["nama"]);
    $nrp = htmlspechialchars($data["nrp"]);
    $email = htmlspechialchars($data["email"]);
    $jurusan = htmlspechialchars($data["jurusan"]);
    $gambar = htmlspechialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar',
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
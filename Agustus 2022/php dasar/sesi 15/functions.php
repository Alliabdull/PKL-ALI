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


function tambah($data) {
    global $conn;    

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }
        $query = "INSERT INTO mahasiswa
                   VALUES
                  ('', '$nama', '$nrp', '$email', '$jurusan',
                     '$gambar') 
                ";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    
}



function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
             </script>";
        return false;
    }


    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['JPG', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
               alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuranya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file( $tmpName, 'img/'.  $namaFile);

    return $namaFile;
        
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
              nama LIKE '%$keyword%' OR
              nrp LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%' 
            ";
    return query($query) ;
}

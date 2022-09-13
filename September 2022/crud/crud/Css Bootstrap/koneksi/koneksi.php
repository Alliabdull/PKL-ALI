<?php 
$host ="localhost";
$username ="root";
$password ="";
$db_name ="dsiswa";
$koneksi = new mysqli($host,$username,$password,$db_name);
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

?>
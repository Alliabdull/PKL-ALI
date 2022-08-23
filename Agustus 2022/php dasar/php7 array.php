<?php  
    LATIHAN 1
// array
// variabel yang dapat memiliki  banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// membuat array
// caralama
$hari = array("senin", "sealasa", "rabu");
// cara baru
 $bulan = ["Januari", "Februari", "Maret"];
 $arr1 = [123, "tulisan", false];

// menampilkan array
var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan [1];

// menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?>






















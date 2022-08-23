<!-- 
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 17 agustus 2022
// echo time();
// echo date("l"), time()-60*60*24*100) ;

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal.tahun
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date("l", strtotime("7 nov 2005"));

<!--  -->




<?php
function salam($waktu, $nama) {
  return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
   <title>Latihan Function</title>
</head>
<body>
   <h1><?= salam("Pagi", "Ali Abdul Rokhim"); ?></h1>
</body>
</html>

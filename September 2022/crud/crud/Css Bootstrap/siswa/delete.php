<?php
require_once('../koneksi/koneksi.php');
try {
  $sql = "DELETE FROM tsiswa WHERE no=" . $_GET['no'];
  $koneksi->query($sql);
} catch (Exception $e) {
  echo $e;
  die();
}
echo "<script>
alert('Data berhasil di hapus');
window.location.href='../read.php';
</script>";

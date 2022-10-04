<?php
require_once('../koneksi/koneksi.php');
try {
  $sql = "DELETE FROM tkelas WHERE Id=" . $_GET['Id'];
  $koneksi->query($sql);
} catch (Exception $e) {
  echo $e;
  die();
}
echo "<script>
alert('Data Berhasil Di Hapus');
window.location.href='../Kelas.php';
</script>";

<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
if (isset($_POST['simpan'])) {
  try {
    $sql = "INSERT INTO tkelas (Nama_Kelas,Deskripsi,Logo_Kelas)VALUES('" . $_POST['Nama_Kelas'] . "','" . $_POST['Deskripsi'] . "','" . $_POST['Logo_Kelas'] . "')";
    if (!$koneksi->query($sql)) {
      echo $koneksi->error;
      die();
    }
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo "<script>
    alert('Data berhasil di simpan');
    window.location.href='Kelas.php';
    </script>";
}
?>

<div class="jumbotron ">
  <div class="container ">
    <h3>Input Data Kelas</h3>

    <div class="col-lg-8">
      <form action="" method="POST" enctype="" role="form ">
        <div class="form-group">
          <label>NAMA KELAS</label>
          <input type="text" name="Nama_Kelas" class="form-control" placeholder="masukan Nama Kelas disini" required>
        </div>

        <div class="form-group">
          <label>DESKRIPSI</label>
          <input type="text" name="Deskripsi" class="form-control" placeholder="Masukan Ddeskripsi Disini" required>
        </div>
        <div class="form-group">
          <label>LOGO KELAS</label>
          <input type="text" name="Logo_Kelas" class="form-control" placeholder="Masukan Logo Disini" required>
        </div>



        <a href="Kelas.php" class="btn btn-success btn-sm">Kembali</a>
        <button type="submit" name="simpan" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-link">Reset</button>
      </form>
    </div>

  </div>
</div>
<?php include 'template/footer.php'; ?>
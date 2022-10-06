<?php
include '../template/head.php';
require_once('../koneksi/koneksi.php');
if (isset($_POST['simpan'])) {
  try {
    $sql = "INSERT INTO tekstra (Bidang_Ekstrakurikuler,Deskripsi)VALUES('" . $_POST['Bidang_Ekstrakurikuler'] . "','" . $_POST['Deskripsi'] . "')";
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
    window.location.href='../Eks.php';
    </script>";
}
?>

<div class="jumbotron ">
  <div class="container ">
    <h3>Input Data Ekstrakurikuler</h3>

    <div class="col-lg-8">
      <form action="" method="POST" enctype="" role="form ">
        <div class="form-group">
          <label>Bidang Ekstrakurikuler</label>
          <input type="text" name="Bidang_Ekstrakurikuler" class="form-control" placeholder="Masukan Nama Ekstrakurikuler disini" required>
        </div>

        <div class="form-group">
          <label>DESKRIPSI</label>
          <input type="text" name="Deskripsi" class="form-control" placeholder="Masukan Deskripsi Disini" required>
        </div>

        <a href="../Eks.php" class="btn btn-success btn-sm">Kembali</a>
        <button type="submit" name="simpan" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-link">Reset</button>
      </form>
    </div>

  </div>
</div>
<?php include '../template/footer.php'; ?>
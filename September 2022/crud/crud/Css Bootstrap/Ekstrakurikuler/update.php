<?php
include '../template/head.php';
require_once('../koneksi/koneksi.php');
if ($_POST) {
  /*print_r($_POST);die();*/
  $sql = "UPDATE tekstra SET Id='" . $_POST['Id'] . "',Bidang_Ekstrakurikuler='" . $_POST['Bidang_Ekstrakurikuler'] . "',Deskripsi='" . $_POST['Deskripsi'] . "' WHERE Id=" . $_POST['Id'];
  /*print_r($sql);die();*/
  if ($koneksi->query($sql) === TRUE) {
    echo "<script>
    alert('Data berhasil di update');
    window.location.href='../Eks.php';
    </script>";
  } else {
    echo "Gagal: " . $koneksi->error;
  }
  $koneksi->close();
} else {
  $query = $koneksi->query("SELECT * FROM tekstra WHERE Id=" . $_GET['Id']);
  if ($query->num_rows > 0) {
    $obj = mysqli_fetch_object($query);
    // print_r();die();
  } else {
    echo "data tidak tersedia";
    die();
  }
?>
  <div class="jumbotron ">
    <div class="container ">
      <h3>Input Data Kelas</h3>
      <div class="col-lg-8">
        <form action="" method="POST" enctype="" role="form ">
          <input type="hidden" name="Id" value="<?= $obj->Id ?>">
          <div class="form-group">
            <label>Bidang Ekstrakurikuler</label>
            <input class="form-control" value="<?= $obj->Bidang_Ekstrakurikuler ?>" type="text" name="Bidang_Ekstrakurikuler" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <input class="form-control" value="<?= $obj->Deskripsi ?>" type="text" name="Deskripsi" maxlength="90" required="">
          </div>

          <a href="../Eks.php" class="btn btn-success btn-sm">kembali</a>
          <button type="submit" class="btn btn-info">Submit</button>
          <button type="reset" class="btn btn-link">Reset</button>
        </form>
      </div>
    </div>
  </div>
<?php
  include '../template/footer.php';
}
mysqli_close($koneksi);
?>
<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
if ($_POST) {
  /*print_r($_POST);die();*/
  $sql = "UPDATE tkelas SET no='" . $_POST['Id'] . "',Nama_Kelas='" . $_POST['Nama_Kelas'] . "',Deskripsi='" . $_POST['Deskripsi'] . "',Logo_Kelas='" . $_POST['Logo_Kelas'] . "' WHERE no=" . $_POST['Id'];
  /*print_r($sql);die();*/
  if ($koneksi->query($sql) === TRUE) {
    echo "<script>
    alert('Data berhasil di update');
    window.location.href='Kelas.php';
    </script>";
  } else {
    echo "Gagal: " . $koneksi->error;
  }
  $koneksi->close();
} else {
  $query = $koneksi->query("SELECT * FROM tkelas WHERE no=" . $_GET['no']);
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
          <input type="hidden" name="no" value="<?= $obj->no ?>">
          <div class="form-group">
            <label>Nama Kelas</label>
            <input class="form-control" value="<?= $obj->Nama_Kelas ?>" type="text" name="Nama_Kelas" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <input class="form-control" value="<?= $obj->Deskripsi ?>" type="text" name="Deskripsi" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>Logo_Kelas</label>
            <input class="form-control" value="<?= $obj->Logo_Kelas ?>" type="date" name="Logo_Kelas" maxlength="30" required="">
          </div>


          <a href="Kelas.php" class="btn btn-success btn-sm">kembali</a>
          <button type="submit" class="btn btn-info">Submit</button>
          <button type="reset" class="btn btn-link">Reset</button>
        </form>
      </div>
    </div>
  </div>
<?php
  include 'template/footer.php';
}
mysqli_close($koneksi);
?>
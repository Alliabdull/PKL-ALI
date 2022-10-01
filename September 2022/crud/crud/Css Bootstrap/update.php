<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
if($_POST){
  /*print_r($_POST);die();*/
  $sql = "UPDATE tsiswa SET no='".$_POST['no']."',nama_lengkap='".$_POST['nama_lengkap']."',tempat_lahir='".$_POST['tempat_lahir']."',tanggal_lahir='".$_POST['tanggal_lahir']."',email='".$_POST['email']."',no_hp='".$_POST['no_hp']."',alamat='".$_POST['alamat']."' WHERE no=".$_POST['no'];
  /*print_r($sql);die();*/
  if ($koneksi->query($sql) === TRUE) {
    echo "<script>
    alert('Data berhasil di update');
    window.location.href='read.php';
    </script>";
  } else {
    echo "Gagal: " . $koneksi->error;
  }
  $koneksi->close();
}else{
   $query = $koneksi->query("SELECT * FROM tsiswa WHERE no=".$_GET['no']);
  if($query->num_rows > 0){
    $obj = mysqli_fetch_object($query);
    // print_r();die();
  }else{
    echo "data tidak tersedia";
    die();
  }
  ?>
  <div class="jumbotron ">
    <div class="container ">
      <h3>Input Data Siswa</h3>
      <div class="col-lg-8">
        <form action="" method="POST" enctype="" role="form ">
          <input type="hidden" name="no" value="<?= $obj->no ?>">
          <div class="form-group">
            <label>nama lengkap</label>
            <input class="form-control" value="<?= $obj->nama_lengkap ?>" type="text" name="nama_lengkap" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>tempat lahir</label>
            <input class="form-control" value="<?= $obj->tempat_lahir ?>" type="text" name="tempat_lahir" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>tanggal lahir</label>
            <input class="form-control" value="<?= $obj->tanggal_lahir?>" type="date" name="tanggal_lahir" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>email</label>
            <input class="form-control" value="<?= $obj->email ?>" type="email" name="email" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>no hp</label>
            <input class="form-control" value="<?= $obj->no_hp ?>" type="number" name="no_hp" maxlength="30" required="">
          </div>

          <div class="form-group">
            <label>Kelas</label>
            <input class="form-control" value="<?= $obj->alamat ?>" type="text" name="alamat" maxlength="30" required="">
          </div>

          <a href="read.php" class="btn btn-success btn-sm">kembali</a>
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

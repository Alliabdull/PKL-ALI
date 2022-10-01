<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
if (isset($_POST['simpan'])) {
  try {
    $sql = "INSERT INTO tsiswa (nama_lengkap,tempat_lahir,tanggal_lahir,email,no_hp,alamat,no_materi) VALUES ('" . $_POST['nama_lengkap'] . "','" . $_POST['tempat_lahir'] . "','" . $_POST['tanggal_lahir'] . "','" . $_POST['email'] . "','" . $_POST['no_hp'] . "','" . $_POST['alamat'] . "','" . $_POST['no_materi'] . "')";
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
    window.location.href='read.php';
    </script>";
}
?>

<div class="jumbotron ">
  <div class="container ">
    <h3>Input Data Siswa</h3>

    <div class="col-lg-8">
      <form action="" method="POST" enctype="" role="form ">
        <div class="form-group">
          <label>NAMA LENGKAP</label>
          <input type="text" name="nama_lengkap" class="form-control" placeholder="masukan Nama anda disini" required>
        </div>

        <div class="form-group">
          <label>TEMPAT LAHIR</label>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="masukan Tempat Lahir" required>
        </div>
        <div class="form-group">
          <label>TANGGAL LAHIR</label>
          <input type="date" name="tanggal_lahir" class="form-control" placeholder="masukan Tanggal Lahir" required>
        </div>


        <div class="form-group">
          <label>EMAIL</label>
          <input type="email" name="email" class="form-control" placeholder="masukan alamat email" required>
        </div>


        <div class="form-group">
          <label>NO.HP</label>
          <input type="number" name="no_hp" class="form-control" placeholder="masukan No.Hp" required>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control" name="alamat" placeholder="masukan alamat anda disini"></textarea>
        </div>


        <div class="form-group">
          <label>Siswa</label>
          <select name="no_materi">
            <?php
            $sql = 'SELECT * FROM `tmateri`';
            $query = mysqli_query($koneksi, $sql);
            while ($obj = mysqli_fetch_object($query)) {
              // print_r($obj);die();
            ?>
              <option value="<?= $obj->no_materi ?>"><?= $obj->materi ?></option>
            <?php

            }
            ?>
          </select>
        </div>





        <a href="read.php" class="btn btn-success btn-sm">Kembali</a>
        <button type="submit" name="simpan" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-link">Reset</button>
      </form>
    </div>

  </div>
</div>
<?php include 'template/footer.php'; ?>
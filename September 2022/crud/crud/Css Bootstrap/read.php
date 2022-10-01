<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
// $query = "SELECT 'buk_id','buk_nama','buk_pengarang' FROM tb_buku";
$query = "SELECT tsiswa.no, tsiswa.nama_lengkap,tsiswa.tempat_lahir,tsiswa.tanggal_lahir,tsiswa.email,tsiswa.no_hp,tsiswa.alamat FROM tsiswa";
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
      <a href="create.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
    </div>
    <div class="col-sm-10 text-right">
      <form class="form-inline">
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Search data">
        </div>
        <button type="submit" class="btn btn-info">search</button>
      </form>
    </div>
    <div class="col-sm-12">
      <div class="marg-top panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Data diri siswa</h3>
        </div>
        <div class="panel-body">
          <div class="bs-example" data-example-id="striped-table">
            <table class="table table-hover table-bordered" style="margin-top: 10px">
              <tr class="success">
                <th width="50px">No</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th style="text-align: center;">Actions</th>
              </tr>
              <?php
              if ($data = mysqli_query($koneksi, $query)) {
                $no = 1;
                while ($obj = mysqli_fetch_object($data)) {
                  // print_r($obj);die();
              ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $obj->nama_lengkap ?></td>
                    <td><?= $obj->tempat_lahir ?></td>
                    <td><?= $obj->tanggal_lahir ?></td>
                    <td><?= $obj->email ?></td>
                    <td><?= $obj->no_hp ?></td>
                    <td><?= $obj->alamat ?></td>
                    <td style="text-align: center;">
                      <a onclick="return confirm('Apakah Yakin Data Akan Dihapus?')" href="delete.php?no=<?php echo $obj->no; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="update.php?no=<?php echo $obj->no; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>>Edit</a>

                    </td>
                  </tr>
              <?php
                  $no++;
                }
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end row -->
</div><!-- container -->
<?php include 'template/footer.php';
?>
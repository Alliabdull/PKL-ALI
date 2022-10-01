<?php
include 'template/head.php';
require_once('koneksi/koneksi.php');
// $query = "SELECT 'buk_id','buk_nama','buk_pengarang' FROM tb_buku";
$query = "SELECT tkelas.Id, tkelas.Nama_Kelas,tkelas.Deskripsi,tkelas.Logo_Kelas FROM tkelas";
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
      <a href="Creeate.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
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
          <h3 class="panel-title">Data Kelas</h3>
        </div>
        <div class="panel-body">
          <div class="bs-example" data-example-id="striped-table">
            <table class="table table-hover table-bordered" style="margin-top: 10px">
              <tr class="success">
                <th width="50px">Id</th>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Logo Kelas</th>
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
                    <td><?= $obj->Nama_Kelas ?></td>
                    <td><?= $obj->Deskripsi ?></td>
                    <td><?= $obj->Logo_Kelas ?></td>
                    <td style="text-align: center;">
                      <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="deelete.php?no=<?php echo $obj->no; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="uppdate.php?no=<?php echo $obj->no; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>>Edit</a>

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
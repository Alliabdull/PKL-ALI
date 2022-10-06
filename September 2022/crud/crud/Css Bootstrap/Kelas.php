<?php
// include 'template/head.php';
require_once('koneksi/koneksi.php');
// $query = "SELECT 'buk_id','buk_nama','buk_pengarang' FROM tb_buku";
$query = "SELECT * FROM tkelas";
?>
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyPortFolio | alliabdull</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- custom css -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script type="text/javascript">
    function buku() {
      location.replace('read.php');
    }

    function siswa() {
      location.replace('Kelas.php');
    }
  </script>
</head>

<body id="home">


  <!-- navbar -->
  <nav class="navbar navbar-default" role="navigation">
    <nav class="bg-primary text-white">
      <div class="container-fluid">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <nav class="navbar navbar-expand-lg navbar-light bg-succes">
            <div class="navbar-head">
              <a class="navbar-brand" href="#sterida">
                <img src="images/oke.png" alt="logo" width="45" height="40" class="d-inline-block align top" alt="" loading="lazy">
              </a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand text-white" href="dashboard.php">Home</a>
              <a class="navbar-brand text-white" href="Kelas.php">Kelas</a>
              <a class="navbar-brand text-white" href="read.php">Data Siswa</a>
              <a class="navbar-brand text-white" href="Eks.php">Ekstrakurikuler</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex2-collapse">
              <ul class="nav navbar-nav">
                <!-- <li><a onclick="siswa()">Data Siswa</a></li> -->
              </ul>
            </div><!-- /.navbar-collapse -->
        </div>
      </div>
    </nav>
  </nav>
  <!-- akhir navbar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        <a href="kelas/Create.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
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
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="kelas/delete.php?Id=<?php echo $obj->Id; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href="kelas/update.php?Id=<?php echo $obj->Id; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>>Edit</a>

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
  <!-- jQuery -->
  <script src="assets/js/jQuery.min.js"></script>

  <!-- Bootstrap JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p>Created With <i class="bi bi-instagram"></i> By <a href="https://www.instagram.com/all.abdl_/" class="text-danger fw-bold">alliabdull</a></p>
  </footer>
  </div>
  <!-- akhir footer -->

</body>

</html>
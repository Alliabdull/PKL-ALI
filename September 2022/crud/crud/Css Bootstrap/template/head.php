 <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Website Sekolah</title>

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
				location.replace('siswa.php');
			}
		</script>
	</head>
	<body>



<nav class="navbar navbar-default" role="navigation">
<nav class="bg-primary text-white text-center pb-5">
<div class="container-fluid">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<a class="navbar-brand" href="#sterida">
          <img src="image/oke.png" alt="Logo" width="45" height="40">
        </a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="dashboard.php">Home</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex2-collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="create.php">Kelas</a></li>
				<li><a onclick="buku()">Data Siswa</a></li>
				<!-- <li><a onclick="siswa()">Data Siswa</a></li> -->
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

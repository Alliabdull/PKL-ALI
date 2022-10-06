 <!DOCTYPE html>
 <html lang="">

 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>MyPortFolio | alliabdull</title>

 	<!-- Bootstrap CSS -->
 	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
 	<link href="../assets/css/bootstrap.css" rel="stylesheet">

 	<!-- custom css -->
 	<link href="../assets/css/style.css" rel="stylesheet">

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
 								<img src="../images/oke.png" alt="logo" width="45" height="40" class="d-inline-block align top" alt="" loading="lazy">
 							</a>
 							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 								<span class="sr-only">Toggle navigation</span>
 								<span class="icon-bar"></span>
 								<span class="icon-bar"></span>
 								<span class="icon-bar"></span>
 								<span class="icon bar"></span>
 							</button>
 							<a class="navbar-brand text-white" href="../dashboard.php">Home</a>
 							<a class="navbar-brand text-white" href="../kelas.php">Kelas</a>
 							<a class="navbar-brand text-white" href="../read.php">Data Siswa</a>
 							<a class="navbar-brand text-white" href="../Eks.php">Ekstrakurikuler</a>
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
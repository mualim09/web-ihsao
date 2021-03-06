<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<link rel="icon" type="images/png" href="assets/images/icon2.png">
	<title>Inter High School Accounting Olympiad - Politeknik Caltex Riau</title>

	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animasi.css">
	<!-- Ionic Icon -->
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">	
	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">
	<?php
	include "koneksi.php";
	?>

	<?php
    $query = mysqli_query($con, "SELECT * FROM beranda");
    $b = mysqli_fetch_array($query)
    ?>

	<header id="header">
		<div id="head">
			<h1 id="logo" class="text-center">
			    <br><br><br><br><br>
			    <br><br><br><br><br>
			    
			</h1>
		</div>
		
		<nav class="navbar navbar-expand-lg navbar-default navbar-sticky">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>
				<div class="navbar-collapse collapse" id="navbarNav">

					<ul class="nav navbar-nav">
						<li class="active nav-item"><a class="nav-link" href="/">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="informasi.php">Informasi</a></li>
						<li class="nav-item"><a class="nav-link" href="list-peserta.php">Peserta</a></li>
						<li class="nav-item"><a class="nav-link" href="pendaftaran.php">Pendaftaran</a></li>
					</ul>
				</div><!--/.nav-collapse -->			
		</nav>

	</header>

	<main id="main">

		<div class="container">

			<div class="row section topspace">
				<div class="col-md-12">
				    <p class="lead2 text-center text-muted">IHSAO Hadir Kembali !</p>
				    <h1 class="animated infinite pulse"><img class="img-home" src="assets/images/guy5.png" alt=""></h1>
					<p class="lead text-center text-muted"><b>Inter High School Accounting Olympiad (IHSAO) </b><?php print $b['info_beranda']; ?></p>
	
			</div>
		</div> 
		
		<!-- / section -->
		<div class="row section featured topspace">
			<h2 class="section-title"><span>TimeLine Acara</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3"><h2 class="text-center"><i class="fa fa-user fa-2"></i></h2>
					<h3 class="text-center">Pendaftaran</h3>
					<br>
					<h5 class="text-center"><?php print nl2br(htmlspecialchars($b['p_tl'])); ?></h5>
				</div>
				<div class="col-sm-6 col-md-3"><h2 class="text-center"><i class="fa fa-bell fa-2"></i></h2>
					<h3 class="text-center">Technical Meeting</h3>
					<h5 class="text-center"><?php print nl2br(htmlspecialchars($b['tm_tl'])); ?></h5>
				</div>
				<div class="col-sm-6 col-md-3"><h2 class="text-center"><i class="fa fa-calendar fa-2"></i></h2>
					<h3 class="text-center">Pembukaan Acara</h3>
					<h5 class="text-center"><?php print nl2br(htmlspecialchars($b['pa_tl'])); ?></h5>
				</div>
				<div class="col-sm-6 col-md-3"><h2 class="text-center"><i class="fa fa-check fa-2"></i></h2>
					<h3 class="text-center">Acara Utama</h3>
					<br>
					<h5 class="text-center"><?php print nl2br(htmlspecialchars($b['au_tl'])); ?></h5>
				</div>
			</div>
		</div><!-- / section -->

		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Cabang Lomba</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="cerdascermat.php">
						<span class="img">
							<img src="assets/images/ss1.png" alt="">
							<span class="cover"><span class="more">Selengkapnya &rarr;</span></span>
						</span>
						<span class="title">Cerdas Cermat<br></span>
					</a>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="olimpiade.php">
						<span class="img">
							<img src="assets/images/ss2.png" alt="">
							<span class="cover"><span class="more">Selengkapnya &rarr;</span></span>
						</span>
						<span class="title">Olimpiade</span>
					</a>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="myob.php">
						<span class="img">
							<img src="assets/images/ss4.png" alt="">
							<span class="cover"><span class="more">Selengkapnya &rarr;</span></span>
						</span>
						<span class="title">MYOB</span>
					</a>
					<h4></h4>
					<p></p>
				</div>
				<center></center>
				<div class="col-sm-12 col-md-4 col-lg-4 col-md-offset-2">
					<a class="thumbnail" href="debat.php">
						<span class="img">
							<img src="assets/images/ss3.png" alt="">
							<span class="cover"><span class="more">Selengkapnya &rarr;</span></span>
						</span>
						<span class="title">Debat</span>
					</a>
					<h4></h4>
					<p></p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="karyailmiah.php">
						<span class="img">
							<img src="assets/images/ss5.png" alt="">
							<span class="cover"><span class="more">Selengkapnya &rarr;</span></span>
						</span>
						<span class="title">Karya Ilmiah</span>
					</a>
					<h4></h4>
					<p></p>
				</div>
			</div>


		</div> <!-- /section -->

		
<!--
		<div class="row section clients topspace">
			<h2 class="section-title"><span>SPONSOR & MEDIA PARTNER</span></h2>
			<div class="col-lg-12">
				<p>
					<img src="assets/images/sample_clients.png" alt="">
				</p>
			</div>
		</div> <!-- /section -->
-->
	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container2">
		<div class="row">
			<div class="col-md-3 widget">
				<center><h3 class="widget-title">Tentang Kami</h3><center>
					<img class="img-footer"  src="assets/images/footer-logo.jpg" alt="">
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Social Media</h3>
					<div class="widget-title">
						<center>
							<button type="button" class="social-media-button icon ion-logo-instagram"><a class="a-sosmed" href="https://www.instagram.com/ihsao2019/">Instagram</a></button>
							<button type="button" class="social-media-button icon ion-logo-whatsapp"><a  class="a-sosmed" href="https://api.whatsapp.com/send?phone=6281266209947&">Whatsapp</a></button>
							<button type="button" class="social-media-button icon ion-md-mail"><a  class="a-sosmed" href="mailto:viviprilya@gmail.com?subject=Saya ingin bertanya..." title="Send Email">Email</a></button>
						</center>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Informasi</h3>
					<div class="widget-body-kontak">
						<a href="https://goo.gl/maps/AJd4c9cBbZT2">Politeknik Caltex Riau</a><br>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Kontak Panitia</h3>
					<div class="widget-body-kontak">
						0852-7803-7498 - VIVI PRILIA <br> 0812-6620-9947 - RENDI MAULANA
						
					</p>	
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						&copy; IHSAO 2019 - Politeknik Caltex Riau by CloudTeamID<br> 
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</footer>



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

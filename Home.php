<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="tooth.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
	integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="jQuery.js"></script>
	<link rel="stylesheet" href="dental.css">
    <title>Dental Clinic</title>
  </head>
  <style>
	table{margin-left : auto;
	margin-right : auto;
	}
  </style>
  <script>
	 $(document).ready(function(){
    $(".teks").hide();
		$(".gigi").click(function(){
			$(".teks").toggle();
		});
	})
  </script>
  <body>
	<div class="container-flex">
		<!-- navbar -->
		<nav class="navbar navbar-expand-xl navbar-light ">
			<a class="navbar-brand" href="home.html"><img src="tooth.png" width="30" height="30" class="d-inline-block align-top" alt="">Dental Clinic</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
				 
				  <li class="nav-item">
					<a class="nav-link" href="dentist schedule.html">Dentist Schedule</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="price list.html">Price List</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Testimonial</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="aksi_logout.php">Logout</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
					aria-haspopup="true" aria-expanded="false">about us</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">VIsi-Misi</a>
					  <a class="dropdown-item" href="#">Founder & Co-Founder</a>
					</div>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</a>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-solid my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	<!-- end navbar-->
	
	<!-- carousel -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="fasilitas2.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h2>Fasilitas yang lengkap</h2>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="waitingroom.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h2>Tempat yang nyaman</h2>
			</div>
		</div>
		<div class="carousel-item">
		  <img src="protokol.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h2>Mematuhi Protokol Kesehatan</h2>
			</div>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- end carousel -->
	
	<!-- card -->
	<div class="card-deck">
		 <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Dentist Schedule</h5>
			  <p class="card-text">Tersedia jadwal praktik dokter gigi. Ayo cek jadwal dokter gigi sebelum membuat janji bertemu dokter.</p>
			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  <a href="dentist schedule.html" class="btn btn-success">Lihat jadwal</a>
			</div>
		 </div>
		 <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Price List</h5>
			  <p class="card-text">Cek berbagai macam perawatan dan pengobatan gigi. Ada berbagai Promo menariknya loh!</p>
			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  <a href="price list.html" class="btn btn-success">Lihat harga</a>
			</div>
		 </div>
		 <div class="card">
			<div class="card-body">
			  <h5 class="card-title">Testimonial</h5>
			  <p class="card-text">Lihat apa saja kata pasien dari klinik kita setelah menjalani perawatan di sini.</p>
			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  <a href="#" class="btn btn-success">Lihat testimoni</a>
			</div>
		 </div>
	</div>
	<!-- end card -->
	<!-- fakta -->
	<table class="home">
		<tr>
			<td class="gigi">
				<button class="btn btn-outline-light " style="background-color :white; border-width:0px;"><img src="gigi2.jpg"></button>
			</td>
			<td class="teks" width="350 px">
			<b>FAKTA</b>
			<p>Kebiasaan menggertakkan gigi(bruxism) dapat merusak saraf saraf di dalam mulut dan akhirnya menjadi penyebab sakit gigi. Jangan sering lakukan ini ya!</p>
			</td>
		</tr>
	</table>
	<!-- end fakta -->
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
	ntegrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</div>
</body>
	<footer><p>
		&copy; 2019 tyket company s.t. All right reservered.</p>
		</footer>
</html>
<?php 
require 'admin/functions.php';
$warga = query("SELECT * FROM data_warga");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/fontawesome-5-pro/css/all.min.css">
	<link rel="stylesheet" href="style4.css">
</head>
<body>

 <!--	navbar	-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
	<div class="container">
  <a class="fs-2 navbar-brand" href="https://goo.gl/maps/NhRvovGp2Upx1f4a8"><i class="fad fa-starship"></i></a>
		<button
		class="navbar-toggler"
		type="button"
		data-bs-toggle="collapse"
		data-bs-target="#navbarNav"
		aria-controls="navbarNav"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
		<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarNav">
		<div class="mx-auto"></div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white" href="beranda.php">BERANDA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="kepengurusan.php">KEPENGURUSAN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="kegiatan.php">KEGIATAN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#">DATA WARGA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="beranda.php#faq">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="kontak.php">KONTAK</a>
			</li>
		</ul>
		</div>
	</div>
</nav>
	
<!--	jumbotron	-->
<div class="jumbotron jumbotron-fluid">
	  <div class="container tittle">
		<h1 class="display-4">Data Warga</h1>
	  </div>
	</div>
    
<!-- Container -->
<div class="container">

<!-- Sub Judul -->
    <div class="row justify-content-center mb-5 subJudul">
        <div class="col-lg-10">
            <h2><i class="fal fa-file-user"></i> DATA WARGA TETAP & TIDAK TETEAP</h2>
                <p>Tersedia dari RT 001 - 012</p>
        </div>
    </div>

<!-- Main Content -->
<div class="row">
  <?php foreach( $warga as $row ) : ?>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">RT <?= $row["rt"]; ?></h5>
                <p class="card-text">Data Warga Tetap dan Tidak Tetap</p>
                <a href="<?= $row["link"]; ?>" class="btn btn-outline-primary" target="blank">Download Disini</a>
            </div>
          </div>
        </div>
    <?php endforeach; ?>
</div>


<!-- wa float -->
<a href="https://wa.me/6285717134573" class="floatWa" target="_blank">
  <i class="fab  fa-whatsapp my-float"></i>
</a>



</div>
<!-- Footer -->
<footer class="text-center text-white" style="background-color: #1A0E06">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="beranda.php" class="text-white underlineFooter">Beranda</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="kegiatan.php" class="text-white underlineFooter">Kegiatan</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="kontak.php" class="text-white underlineFooter">Kontak</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Website RW. 02, Kelurahan Cibubur, Kecamatan Ciracas, Jakarta Timur. Dibangun untuk memudahkan warga dalam mendapatkan berbagai indformasi dan kegiatan.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4 underlineFooter">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCUCnMfN2wEJ0crEZrsHe7hA" class="text-white me-4 underlineFooter">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="" class="text-white me-4 underlineFooter">
            <i class="fal fa-globe-europe"></i>
        </a>
        <a href="" class="text-white me-4 underlineFooter">
          <i class="fab fa-instagram"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: #0C343D"
         >
      © 2022 Copyright:
      <a class="text-white" href="https://www.facebook.com/iyorji"
         >Aryo Senoaji</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>
      <script src="asset/js/bootstrap.bundle.js"></script>
      <script src="asset/js/jquery-3.6.0.min.js"></script>
      <script src="asset/js/popper.min.js"></script>
</body>
</html>
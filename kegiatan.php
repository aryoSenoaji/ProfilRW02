<?php 
require 'admin/functions.php';
$warga = query("SELECT * FROM data_foto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Kegiatan</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
	  <link rel="stylesheet" href="asset/fontawesome-5-pro/css/all.min.css">
	  <link rel="stylesheet" href="style5.css">
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
				<a class="nav-link text-white" href="#">KEGIATAN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="dataWarga.php">DATA WARGA</a>
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
		  <h1 class="display-4">Foto Kegiatan</h1>
	  </div>
</div>

<!-- Judul  -->
<div class="row justify-content-center mb-5 judul">
  <div class="col-lg-10">
      <h2>
          <i class="fal fa-camera-alt"></i> Galeri Kegaiatan</h2>
          <p>Hubungi Kami Jika masih memiliki pertanyaan terkait informasi seputar RW.02</p>
  </div>
</div>

<!-- Galeri Kegaiatan -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="galeriGambar" class="carousel slide galeri" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
          </div>
          <?php foreach( $warga as $row ) : ?>
          <div class="carousel-item">
            <img src="admin/img/<?= $row["foto"]; ?>" class="d-block w-100" alt="...">
          </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#galeriGambar" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galeriGambar" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>     
    </div>
    <div class="col-md-6">
      <div class="container detailGambar">
        <h1><i class="fal fa-info-circle"></i> TENTANG KEGIATAN</h1>
        <p>Foto disamping merupakan kegiatan-kegiatan yang dilaksankan di lingkungan RW 02, Kelurahan Cibubur, Kecamatan Ciracas, Seperti 
        <?php foreach( $warga as $row ) : ?>
          <?= $row["judul"]; ?>,
        <?php endforeach; ?>
      </p>
      </div>
    </div>
  </div>
</div>

<!-- wa float -->
<a href="https://wa.me/6285717134573" class="floatWa" target="_blank">
  <i class="fab  fa-whatsapp my-float"></i>
</a>







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
              <a href="#" class="text-white underlineFooter">Kegiatan</a>
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
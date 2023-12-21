<?php 
require 'admin/functions.php';
$video = query("SELECT * FROM data_video");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Warga RW. 02</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/fontawesome-5-pro/css/all.min.css">
	<link rel="stylesheet" href="style.css">
<!--	My Fonts	-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
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
				<a class="nav-link text-white" href="#">BERANDA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="kepengurusan.php">KEPENGURUSAN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="kegiatan.php">KEGIATAN</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="dataWarga.php">DATA WARGA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="#faq">FAQ</a>
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
		<h1 class="display-4">Selamat Datang Warga <br> RW. 02 Kel. Cibubur</h1>
	  </div>
	</div>
	
<!--	container	-->
<div class="container">
	
<!--	panel info	-->
<div class="row justify-content-center">
	<div class="col-10 panel-info">
		<div class="row">
			<div class="col-lg">
				<img src="img/people.png" alt="Employee" class="float-left">
				<h4>Data Warga</h4>
				<p>Kemudahan Akses Data Warga.</p>
			</div>
			<div class="col-lg">
				<img src="img/smartphone.png" alt="High Res" class="float-left">
				<h4>Kemudahan Akses</h4>
				<p>Dapat Diakses Dimanapun.</p>
			</div>
			<div class="col-lg">
				<img src="img/hierarchy-structure.png" alt="Security" class="float-left">
				<h4>Struktur Lengkap</h4>
				<p>Struktur RW & RT Tersedia</p>
			</div>
		</div>
	</div>
</div>

<!--	Tentang Kami	-->
<div class="row about">
	<div class="col-lg-5">
		<img src="img/wilayah1.jpg" alt="Kuli" class="img-fluid picture">
	</div>
	
	<div class="col-lg-6">
		<h2 class="judulKami">Cakupan Wilayah <span> RW 02</span> Kel.  <span>Cibubur</span></h2>
		<p class="tentangKami">RW. 02 merupakan salah satu dari banyaknya RW yang ada dibawah kelurahan Cibubur. Wilayah RW. 02 Kelurahan Cibubur, Kecamatan Ciracas, Jakarta Timur memiliki luas sebesar ±28 ha, dengan batas-batas sebagai berikut 
		<ul class="tentangKami">
			<li>Sebelah Utara		      :   Jalan Lapangan Tembak</li>
			<li>Sebelah Barat		      :   Kali Cipinang</li>
			<li>Sebelah Timur		      :   Jln. Bulak Sereh </li>
			<li>Sebelah Selatan	      	  :   Wilayah RW03</li>
		</ul></p>
		<p class="tentangKami">Selain itu RW.02 memilki 3.182 kepala keluarga dengan total jumlah penduduk sebanyak 7.574 (2021)</p>
	</div>
	</div>

	<div class="row about">
	<div class="col-lg-6">
		<h2 class="judulKami">Fungsi <span>Rukun Warga</span></h2>
		<ol class="tentangKami">
			<li>Membantu menjalankan tugas pelayanan kepada masyarakat yang menjadi tanggung jawab Pemerintah Daerah ( Kelurahan )
			</li>
			<li>Memelihara kerukunan hidup warga</li>
			<li>Menyusun rencana dan melaksanakan pembangunan dengan mengembangkan
			aspirasi dan swadaya murni masyarakat ataupun dari pemerintah daerah
			</li>
			<li>Membantu menyebarluaskan dan mengamankan setiap program pemerintah</li>
			<li>Menjebatani hubungan sesama anggota masyarakat dan anggota masyarakat</li>
			<p class="text-end mt-2" style="text-decoration: none;"><a href="selengkapnya.php">Selengkapnya...</a></p>
		</ol>
	</div>

	<div class="col-lg-5">
		<img src="img/wilayah2.jpg" alt="Kuli" class="img-fluid picture">
	</div>
	</div>

<!--	Banner	-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner slider-area1">
		<div class="carousel-item active">
      		<img src="img/kegiatan/slider1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/kegiatan/slider2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/kegiatan/slider3.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/kegiatan/slider4.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="img/kegiatan/slider5.jpg" class="d-block w-100" alt="...">
		</div>
	</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
</button>
</div>

<!--	profil Ketua RW	-->
<section class="profil">
	<div class="container text-center">
	  <div class="row">
		<div class="col-md-6 col-12">
		  <div class="pray">
			<img src="img/pengurus/profil2.jpg" alt="Pray" class="" />
		  </div>
		</div>
		<div class="col-md-6 col-12">
		  <div class="panel text-left">
			<h1>Senja Nopemberitno, M.Pd (KETUA RW 02)</h1>
			<p class="pt-4">
				Motivasi saya menjadi Ketua RW02 simple yaitu Menjadi Pelayan Masyarakat. Sebelum menjadi Ketua RW02 saya pernah menjadi Sekretaris RT012/02 yang Ketua nya pada saat itu Bpk. Suhadi. Kebetulan pada Tahun2016 ada peremajaan RT alhamdulillah terpilih untuk masa periode 2016-2019 dilanjutkan dengan periode 2019-2022. Pada tahun 2021 tepatnya 31 Oktober 2021 peremajaan RW02 disitulah akhirnya saya terpilih menjadi Ketua RW02 periode 2021-2024.
			</p>
			<p>
				Bapak/Ibu, rupanya menjadi Pelayan Masyarakat itu banyak sekali suka & dukanya namun saya sukanya saja yg saya ingat karena ketika saya mencalonkan RT/RW saya sudah tahu segala resiko yang akan saya pikul. Banyak program yang akan saya jalankan diantaranya <strong> Pelayanan Administrasi yg lebih baik, Pelayanan Terpadu Malam Hari, Wisata Kampung 02 dsb</strong> , namun semua itu tidak akan terwujud kalau tidak ada kerjasama dari Bapak-bapak RT001 s/d RT012 serta Ibu-ibu PKK 02 yang terdiri dari Kader Jumantik/Dawis dsb, oleh karena itu betapa pentingnya kerjasama tsb untuk mewujudkan masyarakat RW02 ke arah yang lebih baik.
			</p>
			<p>
				Ketua RW02 tidak bisa berdiri sendiri tentunya butuh rekan Kelurahan Cibubur adalah sentral tempat saya mendapatkan pengarahan, himbauan, masukan & juga support, namun diluar itu ada juga rekan kerja yg tidak bisa dikesampingkan antara lain, BISMAPOL, BABINSA, FDKM, SATPOL, LMK dan unsur lainnya. Dengan kerjasama begitu banyak elemen/intansi, saya yakin semua kegiatan/program dapat berjalan dengan baik.
			</p>
			<p>
				Sehubungan dengan itu semua mari kita jalin kerjasama yang baik demi kemajuan RW02, apalagi kita adalah <strong>PELAYAN MASYARAKAT</strong> yang sudah tentu kita harus melayani masyarakat atau warga diwilayahnya masing-masing. Ini adalah kerja sosial mudah-mudahan ini adalah ladang pahala untuk kita semua.
			</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>		

<!-- Kegiatan RW 02 -->
<div class="row">
	<div class="judul_baris">
		<p><i class="fal fa-handshake"></i> | </i>PELAYANAN & KEGIATAN</p>
	</div>
</div>

	<div class="row">
		<div class="col-md-4">
			<img src="img/kegiatan/wisataKampung.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<h6>Wisata Kampung</h6>
				<p>Kegiatan Pengurus RW Wisata kampung di wilayah RW. 02, lebih tepatnya di wilayah RT. 01</p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="img/kegiatan/pembentukanPengurusMasjid.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<h6>Pembentukan DKM Masjid</h6>
				<p>Peremajaan pengurus DKM Masjid Al Barokah Periode 2022 - 2024.</p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="img/kegiatan/pembukaanArisan.jpg" class="card" alt="" height="413">
			<div class="isi_kegiatan">
				<h6 class="mt-6">Pembukaan Arisan</h6>
				<p>Pembukaan arisan RW. 02 yang akan diselenggarakan dalam salah satu upaya bentuk kekeluargaan.</p>
			</div>
		</div>
	</div>

	<div class="row bag2">
		<div class="col-md-3">
			<img src="img/kegiatan/hatinyaPKK.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<p class="text-center mt-3">Kegiatan redesign Taman Hatinya PKK RW. 02.</p>
			</div>
		</div>
		<div class="col-md-3">
			<img src="img/kegiatan/pkkRWabangNone.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<p class="text-center mt-3">Perwakilan PKK RW02 dlm peringatan Hari Ibu yg diadakan Kelurahan Cibubur utk lomba Abang None & pakaian Syari</p>
			</div>
		</div>
		<div class="col-md-3">
			<img src="img/kegiatan/pertemuanPSN.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<p class="text-center mt-3">Pertemuan PSN tiap Jum'at pagi keliling grebek diwilayah RT yg mendapat bagian giliran.</p>
			</div>
		</div>
		<div class="col-md-3">
			<img src="img/kegiatan/pertemuanPSN.jpg" class="card card-img-top" alt="">
			<div class="isi_kegiatan card-body">
				<p class="text-center mt-3">Pertemuan PSN tiap Jum'at pagi keliling grebek diwilayah RT yg mendapat bagian giliran.</p>
			</div>
		</div>
	</div>

<!-- Kependudukan  -->
<div class="row" id="faq">
	<div class="judul_baris">
		<p style="text-align: right;"><i class="fal fa-file-alt"></i> | </i>PELAYANAN & KEGIATAN</p>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dokumen1" aria-expanded="true" aria-controls="collapseOne">
					<i class="fal fa-arrows-alt-v me-2 fs-4"></i>SURAT KETERANGAN DOMISILI
				</button>
			  </h2>
			  <div id="dokumen1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
				  <strong>Persyaratan Pengurusan:</strong> 
				  <p>Pengantar RT/RW sesuai tempat tinggal saat ini, Fotocopy KTP/KK, mengisi Formulir Pernyataan bermaterai. Fotocopy KK dan KTP penjamin (harus yang bertempat tinggal di RT/RW yang sama dengan pemohon).</p>

				  <p>Surat Keterangan domisili dibuat di kantor Kelurahan setempat. Berdasarkan SIPP Kemenpen RB, pertama-tama pemohon mengambil nomor antrean di kantor Kelurahan, setelah dipanggil sesuai nomor antrean kemudian menyerahkan berkas persyaratan setelah lengkap maka akan dimintakan tanda tangan kepada pejabat yang berwenang.</p>

				  <p>Sementara itu, membuat surat keterangan domisili perusahaan bisa dilakukan secara online. Untuk wilayah DKI Jakarta bisa membuka situs di alamat : <a href="http://pelayanan.Jakarta.go.id/user/registration">http://pelayanan.Jakarta.go.id/user/registration</a></p>

				  <p>Kemudian, isi kolom yang dibutuhkan, seperti tipe izin, NIK, nomor KK, nama, email dan nomot handphone. Bila sudah lengkap, klik daftar dan ikuti semua petunjuk.</p>
				</div>
			  </div>
			</div>
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dokumen2" aria-expanded="false" aria-controls="collapseTwo">
					<i class="fal fa-arrows-alt-v me-2 fs-4"></i>SURAT KETERANGAN AHLI WARIS
				</button>
			  </h2>
			  <div id="dokumen2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				<div class="accordion-body">
				 <p>Surat keterangan ahli waris adalah surat yang menerangkan hubungan antara orang yang emninggal denagn keturunannya. Supaya bisa membuktikan bahwa seseorang benar-benar seorang ahli waris, maka perlu dibuktikan dengan adanya surat pernyataan ahli waris</p>
				<strong>Persyaratan Pengurusan:</strong> 
				 <ol>
					 <li>Fotocopy almarhum atau pewaris yang dilegalisir.</li>
					 <li>Fotocopy buku nikah almarhum atau pewaris yang dilegalisir.</li>
					 <li>Fotocopy kartu keluarga pewaris.</li>
					 <li>Fotocopy surat kematian yang dilegalisir.</li>
					 <li>Fotocopy ahli waris yang dilegalisir.</li>
					 <li>Fotocopy kartu keluarga ahli waris.</li>
					 <li>Fotocopy buku nikah ahli waris yang dilegalisir.</li>
					 <li>Surat pernyataan 2 orang saksi yang ditandatangani di atas materai.</li>
					 <li>Fotocopy KTP saksi</li>
				 </ol>

				 <p>Selain dokumen di atas, harus ada pula surat permohonan pembuatan surat keterangan ahli waris yang ditandatangani oleh salah satu ahli waris ( jika ada lebih dari satu orang ahli waris). Lengkapi juga dokumen dengan surat pernyataan ahli waris yang ditandatangani saksi di atas materai dan diketahui RT dan RW.
				 </p>

				 <strong>Prosedur Pengurusan</strong>
				 <p>Ajukan surat pernyataan ahli waris ke RT dan RW setempat untuk ditandatangani.</p>
				</div>
			  </div>
			</div>
		  </div>
	</div>
	<div class="col-md-6">
		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
			  <h2 class="accordion-header" id="headingThree">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dokumen3" aria-expanded="true" aria-controls="collapseThree">
					<i class="fal fa-arrows-alt-v me-2 fs-4"></i>SURAT PENCATATAN PERKAWINAN
				</button>
			  </h2>
			  <div id="dokumen3" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				<div class="accordion-body">
				  <strong>Lokasi Pelayanan:</strong> 
				  <ol>
					  <li>Kantor Dinas Kependudukan dan Catatan Sipil.</li>
					  <li>Kantor Suku Dinas Kependudukan dan Catatan Sipil.</li>
				  </ol>
				  <strong>Persyaratan Pengurusan: </strong>
				  <p>Usia minimal 19 tahun laki-laki dan bagi perempuan minimal 17 tahun. Surat Pengantar yang ditanda tangani RT/RW,  Fotocopy KTP,Fotocopy Akte Kelahiran dan Fotocopy KK Pemohon. Surat Pernyataan Belum memiliki Akte Perkawinan Materai Rp.10.000 ditandatangani oleh 2 Orang Saksi (yang tidak ada hubungan keluarga dengan pemohon) Fotocopy KTP 2 Orang Saksi, Fotocopy KTP dan Fotocopy KK Orang Tua Pemohon (apabila masih hidup).</p>
				</div>
			  </div>
			</div>
			
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFour">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dokumen4" aria-expanded="false" aria-controls="collapseFour">
					  <i class="fal fa-arrows-alt-v me-2 fs-4"></i>SURAT KETERANGAN KEMATIAN
				  </button>
				</h2>
				<div id="dokumen4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
				  <div class="accordion-body">
					<p>Batas waktu Pencatatan Kematian selambat-lambatnya 30 (tiga puluh ) hari sejajk tanggal kematiannya. Dalam hal terjadi ketidakjelasan keberadaan seseorang karena hilang atau mati tetapi tidak ditemukan jenajahnya pencatatan oleh Pejabat Pencatatan Sipil baru dilakukan setelah penetapan pengadilan. Dalam hal kematian seseorang yang tidak jelas identitasnya, instansi pelaksana melakukan pencatatan kematian berdasarkan keterangan dari kepolisian.</p>
					<strong>Persyaratan Pengurusan: </strong> 
					<p>Pengantar RT/RW, Fotokopi Surat Keterangan Rekam Medis (sertipikat kematian) dari RS/Puskesmas, KTP dan KK Asli Almarhum/Almarhuma, Fotokopi KTP saksi 2 orang (bukan Ibu/Ayah kandung).</p>
					<p>Semua berkas dibawa ke Kantor Kelurahan Kelapa Dua Wetan untuk mendapatkan Surat Lapor Kematian. Adapun Pelayanan gratis dan petugas tidak menerima imbalan.</p>
				  </div>
				</div>
			  </div>
	</div>
</div>

<!--	testimonial	-->


<!-- Video Kegiatan -->
<div class="row">
	<div class="judul_baris">
		<p><i class="fal fa-play"></i> | </i>VIDEO KEGIATAN</p>
	</div>
</div>

<?php foreach( $video as $row ) : ?>
<div class="row">
	<iframe width="560" height="500" src="<?= $row["link2"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  </div>
</div>
<?php endforeach; ?>

<!--	testimonial	-->

</div>
<!--	container	-->

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
		  <i class="fab fa-google"></i>
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
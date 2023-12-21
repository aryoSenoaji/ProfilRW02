<?php
session_start();
if (!isset($_SESSION["login"]) ) {
	header("Location: login_system/login.php");
	exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data penduduk berdasar id
$datavdio = query("SELECT * FROM data_video WHERE id = $id")[0];



// cek apakah tombol submit sudah di pencet
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if(edit2($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diedit');
				document.location.href = 'index.php'
			</script>
		";
	} else{
		echo "
			<script>
				alert('Data gagal diedit');
				document.location.href = 'edit2.php'
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/fontawesome-5-pro/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data Warga</title>
</head>
<body id="body-pd">

<header class="header" id="header">
        <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
        <div class="header_img"><img src="https://i.imgur.com/hczKIze.jpg" alt=""></div>
</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo"><i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Selamat Datang</span></a>

        <div class="nav_list">
            <a href="index.php" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="nav_name">Dashboard</span></a>

            <a href="tambah.php" class="nav_link"><i class='bx bx-folder-plus nav_icon'></i><span class="nav_name">Tambah Data Warga</span></a>

            <a href="tambah2.php" class="nav_link"><i class='bx bxl-youtube nav_icon'></i><span class="nav_name">Tambah Link Video</span></a>

            <a href="tambah3.php" class="nav_link"><i class='bx bx-photo-album nav_icon'></i><span class="nav_name">Tambah Foto</span></a>

            <!-- <a href="#" class="nav_link"><i class='bx bx-bookmark nav_icon'></i><span class="nav_name">Bookmark</span></a>

            <a href="#" class="nav_link"><i class='bx bx-folder nav_icon'></i><span class="nav_name">Files</span></a>

            <a href="#" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span></a> -->
        </div>
        </div>
        <a href="logout.php" class="nav_link"><i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Keluar</span></a>
        </nav>
    </div>
<!--Container Main start-->
<div class="height-100 bg-light">
    <h2 class="text-center mb-5">Tambah Link Data Warga</h2>
    <form class="row g-3" action="" method="post">
    <input type="hidden" name="id" value="<?= $datavdio["id"]; ?>">
    <div class="col-md-6">
            <label for="ketVideo" class="form-label">Keterangan Video</label>
            <input type="text" class="form-control" name="ketVideo" id="ketVideo" value="<?= $datavdio["keterangan"]; ?>">
        </div>
        <div class="col-12">
            <label for="linkVideo" class="form-label">Link Video Youtube</label>
            <input type="text" class="form-control" name="linkVideo" id="linkVideo" value="<?= $datavdio["link2"]; ?>">
        </div>
        <div class="col-12 d-grid gap-2 mt-5">
            <button type="submit" name="submit" class="btn btn-outline-primary">Edit</button>
        </div>
    </form>



</div>
<?php
session_start();
if (!isset($_SESSION["login"]) ) {
	header("Location: login_system/login.php");
	exit;
}

require 'functions.php';
$warga = query("SELECT * FROM data_warga");
$warga2 = query("SELECT * FROM data_video");
$warga3 = query("SELECT * FROM data_foto")

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
    <title>Halaman Admin</title>
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
    <div class="container mt-5 px-2">
<!-- data link warga -->

    <div class="table-responsive">
        <table class="table table-responsive table-borderless">
            <thead>
                <h2 class="text-center mb-5">Data Link Warga Tiap RT</h2>
                <tr class="bg-light">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">RT</th>
                    <th scope="col" width="20%">Link</th>
                    <th scope="col" width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i= 1; ?>
            <?php foreach( $warga as $row ) : ?>
                <tr>
                <td><?= $i; ?></td>
                    <td><?= $row["rt"]; ?></td>
                    <td><a href="<?= $row["link"]; ?>"><?= $row["link"]; ?></a></td>
                    <td>
                        <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-outline-primary">EDIT</a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');" class="btn btn-outline-danger">HAPUS</a>
                    </td>
                </tr>
                <?php $i++; ?>
	            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<!-- data video -->

    <div class="table-responsive">
        <table class="table table-responsive table-borderless">
            <thead>
                <h2 class="text-center mb-5">Data Link Video Youtube</h2>
                <tr class="bg-light">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">Keterangan</th>
                    <th scope="col" width="20%">Link</th>
                    <th scope="col" width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i= 1; ?>
            <?php foreach( $warga2 as $row ) : ?>
                <tr>
                <td><?= $i; ?></td>
                    <td><?= $row["keterangan"]; ?></td>
                    <td><a href="<?= $row["link2"]; ?>"><?= $row["link2"]; ?></a></td>
                    <td>
                        <a href="edit2.php?id=<?= $row["id"]; ?>" class="btn btn-outline-primary">EDIT</a>
                        <a href="hapus2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');" class="btn btn-outline-danger">HAPUS</a>
                    </td>
                </tr>
                <?php $i++; ?>
	            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<!-- data foto -->

<div class="table-responsive">
        <table class="table table-responsive table-borderless">
            <thead>
                <h2 class="text-center mb-5">Data Foto Kegaiatan</h2>
                <tr class="bg-light">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">Keterangan</th>
                    <th scope="col" width="20%">Link</th>
                    <th scope="col" width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i= 1; ?>
            <?php foreach( $warga3 as $row ) : ?>
                <tr>
                <td><?= $i; ?></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["foto"]; ?></td>
                    <td>
                        <a href="edit3.php?id=<?= $row["id"]; ?>" class="btn btn-outline-primary">EDIT</a>
                        <a href="hapus3.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');" class="btn btn-outline-danger">HAPUS</a>
                    </td>
                </tr>
                <?php $i++; ?>
	            <?php endforeach; ?>
            </tbody>
        </table>
    </div>



</div>
</div>



<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/jquery-3.6.0.min.js"></script>
<script src="../asset/js/popper.min.js"></script>
<script src="script.js"></script>
</body>
</html>
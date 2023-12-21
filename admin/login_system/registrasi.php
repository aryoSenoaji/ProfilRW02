<?php 
require 'function_login.php';

if (isset($_POST["register"]) ) {
	if( registrasi($_POST) > 0 ) {
		echo "
			<script>
				alert('User Baru Berhasil Ditambahkan');
                document.location.href = 'login.php'
			</script>
		";
	} else {
		echo mysqli_error($koneksidb);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman Registrasi</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/fontawesome-5-pro/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">
                <form class="card-body cardbody-color p-lg-5" action="" method="post">
                    <div class="text-center">
                        <h2 class="text-center text-dark mb-3">Daftar Disini</h2>
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Mauskan Username Disini">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password Disini">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password Disini">
                    </div>

                    <div class="text-center">
                        <button type="submit" name="register" class="btn btn-color px-5 mb-5 w-100">Daftar</button>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </div>



<script src="../../asset/js/bootstrap.bundle.js"></script>
<script src="../../asset/js/jquery-3.6.0.min.js"></script>
<script src="../../asset/js/popper.min.js"></script>
</body>
</html>
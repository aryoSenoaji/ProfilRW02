<?php
session_start();
require 'function_login.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];
	
	// ambil username berdasar id
	$result = mysqli_query($koneksidb, "SELECT username FROM users WHERE 
		id = $id");
	$row = mysqli_fetch_assoc($result);
	
	// cek cookie dan username
	if($key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION["login"]) ) {
	header( "Location: ../index.php");
	exit;
}



	if(isset($_POST["login"]) ) {
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$result = mysqli_query($koneksidb, "SELECT * FROM users WHERE username = '$username'" );
		
		// cek username
		if(mysqli_num_rows($result) === 1 ) {
			
			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"]) ) {
				// set session
				$_SESSION["login"] = true;
				
				// cek remember me
				if(isset($_POST["remember"]) ){
					//buat cookie
					
					
					setcookie('id', $row['id'], time() + 60);
					setcookie('key', hash('sha256', $row['username']), time() + 60);
				}
				
				header("Location: ../index.php");
				exit;
			}
		}
		
		$error = true;
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman Login</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/fontawesome-5-pro/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
  
<?php if(isset($error) ) : ?>
	<?= "<script> 
			alert('username atau password salah');
		</script>"; ?>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">
                <form class="card-body cardbody-color p-lg-5" method="post">
                    <div class="text-center">
                        <h2 class="text-center text-dark mb-3">Login Disini</h2>
                        <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input">
                        <label class="form-check-label" for="checkbox">Ingat Saya</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-color px-5 mb-5 w-100">Login</button>
                    </div>

                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Belum Terdaftar <a href="registrasi.php" class="text-dark fw-bold"> Buat Akun</a>
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
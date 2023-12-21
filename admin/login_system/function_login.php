<?php 
// koneksi ke database
$koneksidb = mysqli_connect("localhost", "root", "", "rw02");

function query($query) {
	global $koneksidb;
	$result = mysqli_query($koneksidb, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data){
	global $koneksidb;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksidb, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksidb, $data["password2"]);
	
	// cek username sudah ada atau belum
	$result = mysqli_query($koneksidb, "SELECT username FROM users WHERE username = '$username'");
	if(mysqli_fetch_assoc($result) ){
		echo "
			<script>
				alert('Username Sudah Terdaftar');
			</script>
		";
	return false;
	}
	
	// cek konfirmasi password
	if( $password !== $password2 ){
		echo "
			<script>
				alert('Konfirmasi Password Salah');
			</script>
		";
		return false;
	}
	
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	// tambahkan user baru ke database
	mysqli_query($koneksidb, "INSERT INTO users VALUES ('', '$username', '$password')");
	
	return mysqli_affected_rows($koneksidb);
}



?>
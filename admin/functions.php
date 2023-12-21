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

function tambah($data){
	global $koneksidb;
	$namaRt = htmlspecialchars($data["namaRt"]);
	$linkGd = htmlspecialchars($data["linkGd"]);

	$query = "INSERT INTO data_warga
			VALUES
		('', '$namaRt', '$linkGd')
";
mysqli_query($koneksidb, $query);

return mysqli_affected_rows($koneksidb);
}


function tambah2($data){
	global $koneksidb;
	$ketVideo = htmlspecialchars($data["ketVideo"]);
	$linkVideo = htmlspecialchars($data["linkVideo"]);

	$query = "INSERT INTO data_video
			VALUES
		('', '$ketVideo', '$linkVideo')
";
mysqli_query($koneksidb, $query);

return mysqli_affected_rows($koneksidb);
}

function tambah3($data){
	global $koneksidb;
	$judul = htmlspecialchars($data["judul"]);

	$foto = upload();
	if(!$foto) {
		return false;
	}
$query = "INSERT INTO data_foto
				VALUES
			('', '$judul','$foto')
	";
	mysqli_query($koneksidb, $query);
	
	return mysqli_affected_rows($koneksidb);
}

function upload(){
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];
	
	// cek apakah tidak ada Foto yang dipuload
	if($error === 4){
		echo"
			<script>
				alert('Pilih Foto Terlebih Dahulu');
			</script>";
		
		return false;
	}
	
	// cek hanya foto saja yang bisa masuk/upload
	$ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
	$ektensiFoto = explode('.', $namaFile);
	$ektensiFoto = strtolower(end($ektensiFoto));
	if(!in_array($ektensiFoto, $ekstensiFotoValid)){
		echo"
			<script>
				alert('Upload Foto!');
			</script>";
		
			return false;
	}
	
	// cek jika ukuranya terlalu besar
	if(	$ukuranFile > 3000000 ) {
		echo"
			<script>
				alert('Ukuran Terlalu Besar');
			</script>";
		
		return false;
	}
	
	// lolos pengecekan, gambar siap dipindahkan ke tujuan
	// generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ektensiFoto;
	
	
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru );
	return $namaFileBaru;
}

function hapus($id) {
	global $koneksidb;
	mysqli_query($koneksidb, "DELETE FROM data_warga WHERE id = $id");
	
	return mysqli_affected_rows($koneksidb);
}

function hapus2($id) {
	global $koneksidb;
	mysqli_query($koneksidb, "DELETE FROM data_video WHERE id = $id");
	
	return mysqli_affected_rows($koneksidb);
}

function hapus3($id) {
	global $koneksidb;
	mysqli_query($koneksidb, "DELETE FROM data_foto WHERE id = $id");
	
	return mysqli_affected_rows($koneksidb);
}

function edit($data) {
	global $koneksidb;
	$id = $data["id"];
	$namaRt = htmlspecialchars($data["namaRt"]);
	$linkGd = htmlspecialchars($data["linkGd"]);

	$query = "UPDATE data_warga SET
				rt = '$namaRt',
				link = '$linkGd'
			WHERE id = $id
				;
	";
	mysqli_query($koneksidb, $query);
	
	return mysqli_affected_rows($koneksidb);
}

function edit2($data) {
	global $koneksidb;
	$id = $data["id"];
	$ketVideo = htmlspecialchars($data["ketVideo"]);
	$linkVideo = htmlspecialchars($data["linkVideo"]);

	$query = "UPDATE data_video SET
				keterangan = '$ketVideo',
				link2 = '$linkVideo'
			WHERE id = $id
				;
	";
	mysqli_query($koneksidb, $query);
	
	return mysqli_affected_rows($koneksidb);
}

function edit3($data) {
	global $koneksidb;
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	
	// ambil gambar lama
	$fotoLama = ($data["fotoLama"]);
	
	
	// cek apakah user mengupload gambar baru/tidak
	if($_FILES['foto']['error'] === 4 ){
		$foto = $fotoLama;
	} else {
		$foto = upload();
	}
	
	
	
	$query = "UPDATE data_foto SET
				judul = '$judul',
				foto = '$foto'
			WHERE id = $id
				;
	";
	mysqli_query($koneksidb, $query);
	
	return mysqli_affected_rows($koneksidb);
}

?>
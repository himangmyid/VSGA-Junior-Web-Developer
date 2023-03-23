<?php
include'../db.php';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$semester=$_POST['semester'];
$ipk=$_POST['ipk'];
$beasiswa=$_POST['beasiswa'];
$status_ajuan="Belum Diverifikasi";
	
if(isset($_POST['simpan'])){
		extract($_POST);
		$nama_file   = $_FILES['berkas']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['berkas']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $nim.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";
	
	$sql = 
	"INSERT INTO mahasiswa
		VALUES('$nim','$nama','$email','$hp','$semester','$ipk','$beasiswa','$file_foto','$status_ajuan')";
	$query = mysqli_query($conn, $sql);

	header("location:../index.php?p=hasil");
}

?>
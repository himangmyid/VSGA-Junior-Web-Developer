<?php
include'../db.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$semester=$_POST['semester'];
$ipk=$_POST['ipk'];
$beasiswa=$_POST['beasiswa'];
$status_ajuan=$_POST['status_ajuan'];
	
If(isset($_POST['simpan'])){
	
    extract($_POST);
    $nama_file   = $_FILES['berkas']['name'];
    if(!empty($nama_file)){
    // Baca lokasi file sementar dan nama file dari form (fupload)
    $lokasi_file = $_FILES['berkas']['tmp_name'];
    $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
    $file_foto = $nim.".".$tipe_file;
    // Tentukan folder untuk menyimpan file
    $folder = "../img/$file_foto";
    @unlink ("$folder");
    // Apabila file berhasil di upload
    move_uploaded_file($lokasi_file,"$folder");
    }
    else
        $file_foto=$foto_awal;
	
mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', email='$email', hp='$hp', semester='$semester', ipk='$ipk', beasiswa='$beasiswa', berkas='$file_foto', status_ajuan='$status_ajuan' WHERE nim='$nim'"
);
	

header("location:../index.php?p=hasil");
}
?>
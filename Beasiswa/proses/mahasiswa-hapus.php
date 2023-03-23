<?php
include'../db.php';
$mahasiswa=$_GET['id'];

mysqli_query($conn,
	"DELETE FROM mahasiswa
	WHERE nim='$mahasiswa'"
);
header("location:../index.php?p=hasil-admin");
?>
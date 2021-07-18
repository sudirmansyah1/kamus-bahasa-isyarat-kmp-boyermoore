<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../login.php?status=belum_login");
}
else{
	if(!in_array($_SESSION['group'], array('superadmin', 'admin'))){
		header("location:../index.php");
	}
}
include '../../assets/config.php';
$judul = $_POST['judul'];
$t = time();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been added new vocabulary ".$judul;
//------------------------------------------------------//
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?status=failed1");
}else{
	if($ukuran < 9999999999){		
		$xx =  $judul.'_'.$t.'.'.$ext;
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../../assets/img/kamus/'.$judul.'_'.$t.'.'.$ext);
		mysqli_query($koneksi, "INSERT INTO kamus VALUES(NULL,'$judul','$xx')");
		mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
		header("location:index.php?status=add_success");
	}else{
		header("location:index.php?status=failed2");
	}
}
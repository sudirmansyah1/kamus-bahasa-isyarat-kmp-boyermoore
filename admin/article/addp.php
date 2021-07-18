<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../login.php?status=belum_login");
}
include '../../assets/config.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$t = time();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been added new article ".$judul;
//------------------------------------------------------//
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?status=failed1");
}else{
	if($ukuran < 1044070){		
		$xx =  $judul.'_'.$t.'.'.$ext;
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../../assets/img/artikel/'.$judul.'_'.$t.'.'.$ext);
		mysqli_query($koneksi, "INSERT INTO artikel VALUES(NULL,'$judul','$tanggal', '$t', '$isi', '$xx', '$username_sess')");
		mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
		header("location:index.php?status=add_success");
	}else{
		header("location:index.php?status=failed2");
	}
}
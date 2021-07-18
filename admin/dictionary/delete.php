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
$id = $_GET['id'];
$sql2 = "SELECT * FROM kamus WHERE id = '$id'";
$query2 = $koneksi->query($sql2);
$data = $query2->fetch_assoc();
$judul = $data['judul'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been deleted vocabulary ".$judul;
//------------------------------------------------------//
$sql = "DELETE FROM kamus WHERE `id`=$id";
if ($koneksi->query($sql) === TRUE) {
    mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
    header("location:index.php?status=deletesuccess");
} else {
    header("location:index.php?status=failed3");
}
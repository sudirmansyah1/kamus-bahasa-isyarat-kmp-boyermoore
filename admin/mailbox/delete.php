<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../login.php?status=belum_login");
}

include '../../assets/config.php';
$id = $_GET['id'];
$sql2 = "SELECT * FROM mailbox WHERE id = '$id'";
$query2 = $koneksi->query($sql2);
$data = $query2->fetch_assoc();
$email = $data['email'];
$subject = $data['subject'];
$name = $data['name'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been deleted mailbox (".$name.":".$email.":".$subject.")";
//------------------------------------------------------//
$sql = "DELETE FROM mailbox WHERE `id`=$id";
if ($koneksi->query($sql) === TRUE) {
    mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
    header("location:index.php?status=deletesuccess");
} else {
    header("location:index.php?status=failed3");
}
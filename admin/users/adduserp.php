<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../login.php?status=belum_login");
}
else{
	if($_SESSION["group"]!="superadmin"){
		header("location:../index.php");
	}
}
include '../../assets/config.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$group = $_POST['group'];
$t = time();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['photo']['name'];
$ukuran = $_FILES['photo']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been added new user (".$username.":".$group.")";
//------------------------------------------------------//
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?status=failed1");
}else{
	if($ukuran < 1044070){		
		$xx =  $username.'_'.$t.'.'.$ext;
		move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/dist/img/users/'.$username.'_'.$t.'.'.$ext);
		mysqli_query($koneksi, "INSERT INTO users VALUES(NULL,'$username','$email','$password','$xx','$group')");
		mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
		header("location:index.php?status=add_success");
	}else{
		header("location:index.php?status=failed2");
	}
}
<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../assets/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password); // Untuk menjaga keamanan password maka password dilakukan enkripsi dengan md5, password yang tertera di database sudah berbentuk md5 sehingga untuk menyamakan maka dibutuhkan md5()
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM users WHERE (`username`='$username' OR `email`='$username') AND `password`='$password2'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
    $row = mysqli_fetch_assoc($data);
    // Fungsi ini untuk menyimpan data admin sebagai session
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];;
    $_SESSION['email'] = $row['email'];
    $_SESSION['photo'] = $row['photo'];
    $_SESSION['group'] = $row['group'];

    //------------------------------------------------------//
    // Fungsi ini untuk menyimpan aktifitas admin, admin yang login akan disimpan data kapan dia melakukan login.
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
    $tanggal = $date->format('d-m-Y H:i:s');
    $photo_sess = $_SESSION["photo"];
    $username_sess = $_SESSION["username"];
    $group_sess = $_SESSION['group'];
    $activity = $username_sess." has been logged in as ".$group_sess;
    mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
    //------------------------------------------------------//
	header("location:index.php");
}else{
	header("location:login.php?status=gagal");
}
?>
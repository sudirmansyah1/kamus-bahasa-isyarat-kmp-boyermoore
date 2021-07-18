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
//------------------------------------------------------//
$id = $_POST['id'];
$sql2 = "SELECT * FROM artikel WHERE id = '$id'";
$query2 = $koneksi->query($sql2);
$data = $query2->fetch_assoc();
$judul2 = $data['judul'];
$isi2 = $data['isi'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];

//------------------------------------------------------//
    if (empty($_FILES['gambar']['tmp_name']) || !is_uploaded_file($_FILES['gambar']['tmp_name'])){
        
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        
        if ($judul2 == $judul) {
            $activity = $username_sess." has been edited article ".$judul2;
        }
        else{
            $activity = $username_sess." has been edited article ".$judul2." to ".$judul;
        }
        $sql = "UPDATE artikel SET `judul`='$judul', `isi`='$isi' WHERE `id`='$id'";
        
       
        if ($koneksi->query($sql) === TRUE) {
            mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
            header("location:index.php?status=edit_success");
        }
        else{
            header("location:index.php?status=failed4");
        }
    }
    else{
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $t = time();
        $ekstensi =  array('png','jpg','jpeg');
        $filename = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if ($judul2 == $judul) {
            $activity = $username_sess." has been edited article ".$judul2;
        }
        else{
            $activity = $username_sess." has been edited article ".$judul2." to ".$judul;
        }
        //------------------------------------------------------//
        if(!in_array($ext,$ekstensi) ) {
            header("location:index.php?status=failed1");
        }else{
            if($ukuran < 1044070){		
                $xx =  $judul.'_'.$t.'.'.$ext;
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../../assets/img/artikel/'.$judul.'_'.$t.'.'.$ext);
                mysqli_query($koneksi, "UPDATE artikel SET `judul`='$judul', `isi`='$isi',`gambar`='$xx' WHERE `id`='$id'");
                //mysqli_query($koneksi, "INSERT INTO kamus VALUES(NULL,'$judul','$isi','$xx')");
                mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
                header("location:index.php?status=add_success");
            }else{
                header("location:index.php?status=failed2");
            }
        }
    }


?>
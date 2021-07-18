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
//------------------------------------------------------//
$id2 = $_POST['id'];
$sql2 = "SELECT * FROM users WHERE id = '$id2'";
$query2 = $koneksi->query($sql2);
$data = $query2->fetch_assoc();
$username2 = $data['username'];
$group2 = $data['group'];
//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];

//------------------------------------------------------//
if($_POST['passc'] == 'y' && $_POST['photoc'] == 'y'){
    
    if(empty($_POST['password'])){
        header("location:index.php?status=failed4");
    }
    else{
        if (empty($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])){
            
            header("location:index.php?status=failed4");
        }
        else{
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $group = $_POST['group'];
            $t = time();
            $ekstensi =  array('png','jpg','jpeg');
            $filename = $_FILES['photo']['name'];
            $ukuran = $_FILES['photo']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            $activity = $username_sess." has been edit user ".$username2." (".$username.":".$email.":".$group.") with photo and password changed";
            if(!in_array($ext,$ekstensi) ) {
                header("location:index.php?status=failed1");
            }else{
                if($ukuran < 1044070){		
                    $xx =  $username.'_'.$t.'.'.$ext;
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/dist/img/users/'.$username.'_'.$t.'.'.$ext);
                    mysqli_query($koneksi, "UPDATE users SET `username`='$username', `email`='$email',`password`='$password',`photo`='$xx', `group` = '$group' WHERE `id`='$id'");
                    //mysqli_query($koneksi, "INSERT INTO users VALUES(NULL,'$username','$email','$password','$xx','$group')");
                    mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
                    header("location:index.php?status=edit_success");
                }else{
                    header("location:index.php?status=failed2");
                }
            }
        }
    }
}
else if($_POST['passc'] == 'y'){
    if(empty($_POST['password'])){
        header("location:index.php?status=failed4");
    }
    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $group = $_POST['group'];
        $sql = "UPDATE users SET `username`='$username', `email`='$email',`password`='$password', `group` = '$group' WHERE `id`='$id'";
        $activity = $username_sess." has been edit user ".$username2." (".$username.":".$email.":".$group.") with password changed";
        if ($koneksi->query($sql) === TRUE) {
            mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
            header("location:index.php?status=edit_success");
        }
        else{
            header("location:index.php?status=failed4");
        }
    }
}
else if($_POST['photoc'] == 'y'){
    if (empty($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])){
            
        header("location:index.php?status=failed4");
    }
    else{
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $group = $_POST['group'];
        $t = time();
        $ekstensi =  array('png','jpg','jpeg');
        $filename = $_FILES['photo']['name'];
        $ukuran = $_FILES['photo']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $activity = $username_sess." has been edit user ".$username2." (".$username.":".$email.":".$group.") with photo changed";
        if(!in_array($ext,$ekstensi) ) {
            header("location:index.php?status=failed1");
        }else{
            if($ukuran < 1044070){		
                $xx =  $username.'_'.$t.'.'.$ext;
                move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/dist/img/users/'.$username.'_'.$t.'.'.$ext);
                mysqli_query($koneksi, "UPDATE users SET `username`='$username', `email`='$email',`photo`='$xx', `group` = '$group' WHERE `id`='$id'");
                //mysqli_query($koneksi, "INSERT INTO users VALUES(NULL,'$username','$email','$password','$xx','$group')");
                mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
                header("location:index.php?status=edit_success");
            }else{
                header("location:index.php?status=failed2");
            }
        }
    }
}
else{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $group = $_POST['group'];
    $sql = "UPDATE users SET `username`='$username', `email`='$email', `group` = '$group' WHERE `id`='$id'";
    $activity = $username_sess." has been edit user ".$username2." (".$username.":".$email.":".$group.")";
    if ($koneksi->query($sql) === TRUE) {
        mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
        header("location:index.php?status=edit_success");
    }
    else{
        header("location:index.php?status=failed4");
    }
}

?>
<?php
require 'assets/config.php';
$message = str_replace("\n", '<br />', $_POST['message']);
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST['subject']);

$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->getTimestamp();
$tanggal2 = $date->format('d-m-Y H:i:s');
$sql = "INSERT INTO mailbox VALUES(NULL,'$name','$email','$subject','$message','n','$tanggal','$tanggal2','n')";


if ($koneksi->query($sql) === TRUE) {\
    header("location:hubungi.php?status=email_success");
}
else{
    header("location:hubungi.php?status=failed");
}
?>
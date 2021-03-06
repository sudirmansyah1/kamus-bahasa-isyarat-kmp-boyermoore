<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../login.php?status=belum_login");
}
include '../../assets/config.php';
require '../assets/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;


//------------------------------------------------------//
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$tanggal = $date->format('d-m-Y H:i:s');
$photo_sess = $_SESSION["photo"];
$username_sess = $_SESSION["username"];
$activity = $username_sess." has been replied mailbox (".$_POST['to'].":".$_POST['subjectx'].")";
//------------------------------------------------------//
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sudirmansyah061299@gmail.com';
$mail->Password = '0821733036aA';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('sudirmansyah061299@gmail.com', 'Indonesia Sign Language');

$mail->addAddress($_POST['to']);

$mail->Subject = $_POST['subject'];

$mail->isHTML(true);

$isi = "<html xmlns='http://www.w3.org/1999/xhtml'><head>
<meta name='viewport' content='width=device-width'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<style>
* {
  margin: 0;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  box-sizing: border-box;
  font-size: 14px;
}

img {
  max-width: 100%;
}

body {
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none;
  width: 100% !important;
  height: 100%;
  line-height: 1.6em;
  /* 1.6em * 14px = 22.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
  /*line-height: 22px;*/
}

/* Let's make sure all tables have defaults */
table td {
  vertical-align: top;
}

body {
  background-color: #ecf0f5;
  color: #6c7b88
}

.body-wrap {
  background-color: #ecf0f5;
  width: 100%;
}

.container {
  display: block !important;
  max-width: 600px !important;
  margin: 0 auto !important;
  /* makes it centered */
  clear: both !important;
}

.content {
  max-width: 600px;
  margin: 0 auto;
  display: block;
  padding: 20px;
}

.main {
  background-color: #fff;
  border-bottom: 2px solid #d7d7d7;
}

.content-wrap {
  padding: 20px;
}

.content-block {
  padding: 0 0 20px;
}

.header {
  width: 100%;
  margin-bottom: 20px;
}

.footer {
  width: 100%;
  clear: both;
  color: #999;
  padding: 20px;
}
.footer p, .footer a, .footer td {
  color: #999;
  font-size: 12px;
}

h1, h2, h3 {
  font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
  color: #1a2c3f;
  margin: 30px 0 0;
  line-height: 1.2em;
  font-weight: 400;
}

h1 {
  font-size: 32px;
  font-weight: 500;
  /* 1.2em * 32px = 38.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
  /*line-height: 38px;*/
}

h2 {
  font-size: 24px;
  /* 1.2em * 24px = 28.8px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
  /*line-height: 29px;*/
}

h3 {
  font-size: 18px;
  /* 1.2em * 18px = 21.6px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
  /*line-height: 22px;*/
}

h4 {
  font-size: 14px;
  font-weight: 600;
}

p, ul, ol {
  margin-bottom: 10px;
  font-weight: normal;
}
p li, ul li, ol li {
  margin-left: 5px;
  list-style-position: inside;
}

a {
  color: #348eda;
  text-decoration: underline;
}

.btn-primary {
  text-decoration: none;
  color: #FFF;
  background-color: #42A5F5;
  border: solid #42A5F5;
  border-width: 10px 20px;
  line-height: 2em;
  /* 2em * 14px = 28px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
  /*line-height: 28px;*/
  font-weight: bold;
  text-align: center;
  cursor: pointer;
  display: inline-block;
  text-transform: capitalize;
}

.last {
  margin-bottom: 0;
}

.first {
  margin-top: 0;
}

.aligncenter {
  text-align: center;
}

.alignright {
  text-align: right;
}

.alignleft {
  text-align: left;
}

.clear {
  clear: both;
}

.alert {
  font-size: 16px;
  color: #fff;
  font-weight: 500;
  padding: 20px;
  text-align: center;
}
.alert a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  font-size: 16px;
}
.alert.alert-warning {
  background-color: #FFA726;
}
.alert.alert-bad {
  background-color: #ef5350;
}
.alert.alert-good {
  background-color: #8BC34A;
}

.invoice {
  margin: 25px auto;
  text-align: left;
  width: 100%;
}
.invoice td {
  padding: 5px 0;
}
.invoice .invoice-items {
  width: 100%;
}
.invoice .invoice-items td {
  border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
  border-top: 2px solid #6c7b88;
  font-size: 18px;
}

@media only screen and (max-width: 640px) {
  body {
    padding: 0 !important;
  }

  h1, h2, h3, h4 {
    font-weight: 800 !important;
    margin: 20px 0 5px !important;
  }

  h1 {
    font-size: 22px !important;
  }

  h2 {
    font-size: 18px !important;
  }

  h3 {
    font-size: 16px !important;
  }

  .container {
    padding: 0 !important;
    width: 100% !important;
  }

  .content {
    padding: 0 !important;
  }

  .content-wrap {
    padding: 10px !important;
  }

  .invoice {
    width: 100% !important;
  }
}

</style>
</head>

<body itemscope='' itemtype='http://schema.org/EmailMessage'>

<table class='body-wrap'>
    <tbody><tr>
        <td></td>
        <td class='container' width='600'>
            <div class='content'>
                <table class='main' width='100%' cellpadding='0' cellspacing='0'>
                    <tbody><tr>
                        <td class='alert alert-warning'>
                            INDONESIA SIGN LANGUAGE
                        </td>
                    </tr>
                    <tr>
                        <td class='content-wrap'>
                            <table width='100%' cellpadding='0' cellspacing='0'>
                                <tbody><tr>
                                    <td class='content-block'>
                                        <h3>Hallo ".$_POST['name']."!</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td class='content-block'>
                                        ".$_POST['message']."
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class='content-block'>
                                        Thanks for send us message.
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                <div class='footer'>
                    <table width='100%'>
                        <tbody><tr>
                            <td class='aligncenter content-block'><strong>Copyright &copy; 2020 Sudirmansyah.</strong> All rights
                                reserved.</td>
                        </tr>
                    </tbody></table>
                </div></div>
        </td>
        <td></td>
    </tr>
</tbody></table>




</body></html>";
$mailContent = $isi;
$mail->Body = $mailContent;

if(!$mail->send()){
    header("location:index.php?status=failed");
}else{
  $id = $_POST['id'];
  mysqli_query($koneksi, "UPDATE mailbox SET `replied`='y' WHERE `id`='$id'");
  
  mysqli_query($koneksi, "INSERT INTO activity VALUES(NULL,'$tanggal','$photo_sess','$username_sess','$activity')");
    header("location:index.php?status=success");
    
}
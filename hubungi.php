<?php

require 'assets/config.php';
?>

<html>
<head>
<!-- Bootstrap -->
<link rel="stylesheet" href="assets/template/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="assets/template/css/select2.css" />
<!-- Slict CSS -->
<link rel='stylesheet' href='assets/template/vendor/slick/slick-theme.css'>
<link rel='stylesheet' href='assets/template/vendor/slick/slick.css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/template/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/template/css/custom.css">

<!-- Animation CSS -->
<link rel="stylesheet" href="assets/template/css/animate.min.css">
<!-- jQuery -->
<script src="assets/template/js/jquery.min.js"></script>
<!-- Popper -->
<script src="assets/template/js/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/template/js/bootstrap.min.js"></script>
<!-- Slick JavaScript -->
<script src='assets/template/vendor/slick/slick.min.js'></script>
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <nav class="navbar navbar-expand-lg  py-3">
            <div class="container"><a href="index.php" class="navbar-brand"><h1>KAMUS BAHASA ISYARAT JAKARTA</h1></a>
                <p class="nav-info"><a href="index.php">Home</a><a href="kamus.php">Buka Kamus</a><a href="index.php">Tentang Kami</a><a href="hubungi.php">Hubungi</a></p>
                
        </nav>
    </header>
    <!-- END OF WWHEADER SECTION -->
    <!--Header -->
    <section class="headerkontak">
        <div class="container"><h1>HUBUNGI KAMI</h1>
        </div>
    </section>
    <!-- END OF HEADER -->
    <!-- Artikel -->
    <section class="contact-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <?php 
                        if(isset($_GET['status'])){
		                    if($_GET['status'] == "email_success"){?>
                            <div class="alert alert-success">
                                <strong>Success!</strong> Email has been sended.
                            </div>
                            <?php } else if ($_GET['status'] == "failed"){?>
                                <div class="alert alert-danger">
                                    <strong>Failed!</strong> Email failed to send.
                                </div><?php }}?>
                    </div>
                    <div class="col-12">
                        <h2 class="contact-title">Kirim Email</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="hubungip.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Masukan Pessan" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" placeholder="Masukan Nama" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" placeholder="Masukan Alamat Email" required >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" maxlength="70" placeholder="Masukan Subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-info">Kirim</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    <!-- Artikel -->
    <footer>
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
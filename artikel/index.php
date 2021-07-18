<?php

require '../assets/config.php';
$judul = $_GET['title'];
    $timestamp = $_GET['id'];
    $sql = "SELECT * FROM artikel WHERE judul = '$judul' AND `timestamp` = '$timestamp'";
    $query = $koneksi->query($sql);
    $data = $query->fetch_assoc();
?>

<html>
<head>
<!-- Bootstrap -->
<link rel="stylesheet" href="../assets/template/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="../assets/template/css/select2.css" />
<!-- Slict CSS -->
<link rel='stylesheet' href='../assets/template/vendor/slick/slick-theme.css'>
<link rel='stylesheet' href='../assets/template/vendor/slick/slick.css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/template/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../assets/template/css/custom.css">

<!-- Animation CSS -->
<link rel="stylesheet" href="../assets/template/css/animate.min.css">
<!-- jQuery -->
<script src="../assets/template/js/jquery.min.js"></script>
<!-- Popper -->
<script src="../assets/template/js/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="../assets/template/js/bootstrap.min.js"></script>
<!-- Slick JavaScript -->
<script src='../assets/template/vendor/slick/slick.min.js'></script>
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <nav class="navbar navbar-expand-lg  py-3">
            <div class="container"><a href="../index.php" class="navbar-brand"><h1>KAMUS BAHASA ISYARAT JAKARTA</h1></a>
                <p class="nav-info"><a href="../index.php">Home</a><a href="../kamus.php">Buka Kamus</a><a href="../index.php">Tentang Kami</a><a href="../hubungi.php">Hubungi</a></p>
                
        </nav>
    </header>
    <!-- END OF WWHEADER SECTION -->
    <!--Header -->
    <section class="headerartikel">
        <div class="container"><h1><?php echo $data['judul'];?></h1>
        </div>
    </section>
    <!-- END OF HEADER -->
    <!-- Artikel -->
    <section class="isiartikel">
        <div class="container">
            <img src="../assets/img/artikel/<?php echo $data['gambar'];?>" alt="" width="100%">
            <div class=isi>
            <h2 style="color: #2d2d2d;"><?php echo $data['judul'];?>
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $data['author'];?></a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i> <?php echo $data['tanggal'];?></a></li>
                                </ul>
                                <label>
                                
                                <p class="excert">
                                    <?php echo $data['isi'];?>
                                </p>
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
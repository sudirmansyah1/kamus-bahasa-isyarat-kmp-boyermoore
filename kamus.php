<?php

require 'assets/config.php';
$awal = microtime(true);
include 'kmp.php';
$KMP = new KMP();
$kata = '';
if(isset($_GET['kata'])){
    $k = strtolower($_GET['kata']);
    $kata = ucfirst($k);
}
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
    <section class="headerkamus">
        <div class="container">
        <?php
                            if($kata!=''){ echo "<h1>Kata yang dicari '".$_GET['kata']."' dengan menggunakan algoritma Knuth-Morris-Pratt</h1>";}
                            else{
                                echo "<h1>KAMUS BAHASA ISYARAT JAKARTA</h1>";
                            }
                            ?>
            <form method="get" action="" class="form-bahasa">
                                    <input type="text" name="kata" placeholder="Cari Kosa Kata">
                                    
                                </form>
        </div>
    </section>
    <!-- END OF HEADER -->
    <!-- KAMUS -->
<section class="kamus"><div class="container" st><?php
if($kata!=''){
                                $isiartikel = $koneksi->query("select * from kamus WHERE judul LIKE '%$k%' order by `judul` asc");
                                while($teks = mysqli_fetch_array($isiartikel)){
                                    strtolower($k);?>
                <hr>
                    <div class="card" style="width:40%;  border:1px;">
                        <img class="card-img-top" src="assets/img/kamus/<?php echo $teks['gambar']?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $teks['judul']?></h4>
                        <?php 
                                            
                                            $hasil = $KMP->KMPSearch($k,strip_tags((strtolower($teks['judul']))));
                                           ?>
                                                        <div class="alert alert-success">
                                                            <?php echo "Kata yang berhasil dicari pada artikel ini adalah ".count($hasil)."<br>";
                                                            echo "Kata yang dicari berada pada posisi ke ";
                                                            foreach($hasil as $h) echo $h." ";?></a>
                                                        </div>
                        </div>
                    </div>
                <hr>
                <?php
                                            }
                                            $akhir = microtime(true);
                                            $lama = $akhir - $awal;?>
                                            <div class="alert alert-warning">
                                                <?php echo "Lama eksekusi adalah: ".$lama." microsecond"; ?></a>.
                                            </div>
                                            <?php
                                           
                                        }
                                            ?></div>
</section>
    <!-- END OF KAMUS -->
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
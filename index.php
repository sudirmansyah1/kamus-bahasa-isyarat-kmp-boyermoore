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
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container"><a href="index.php" class="navbar-brand"><h1>KAMUS BAHASA ISYARAT JAKARTA</h1></a>
                <p class="nav-info"><a href="index.php">Home</a><a href="kamus.php">Buka Kamus</a><a href="index.php">Tentang Kami</a><a href="hubungi.php">Hubungi</a></p>
                
        </nav>
    </header>
    <!-- END OF WWHEADER SECTION -->
    <!-- HERO SECTION -->
    <section class="hero">
        <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
            
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <div class="container h-100 ">
                    <div class="row align-items-center h-100">
                    <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                                
                                <div class="caption">
                                    <h1 class="animated bounceInDown  hero-animation-delay hero-bold" style="color: #000;">Mari Belajar</h1>
                                    <h1 class="animated fadeInLeft  hero-animation-delay hero-bold" style="color:#FF5A82;">Bahasa Isyarat Dengan Mudah</h1>
                                    <span class="animated fadeInRight  hero-animation-delay herospan" style="color: #000;">Dimanapun dan kapanpun kamu bisa belajar</span><br>
                                    <a href="kamus.php" class="btn animated fadeInUp hero-animation-delay btn-hero herospan">Mari Mulai Belajar</a>
                                </div>
                            </div>
                            <div class="col-5 col-md-9 col-lg-7 col-xl-6"> 
                            <img src="assets/img/hero2.png" width="800px" class="animated jackInTheBox hero-animation-delay" alt="">
                            </div>
                    </div>
                </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- END OF HERO SECTION -->
    <!--TENTANGKAMI-->
    <section class="tentang">
        <div class="container"><center><h1 style="color:white; margin-bottom:30px;">TENTANG KAMI</h1></center>
            <div class="tentangdalam">
                <hr>
            <p>Kamus Bahasa Isyarat memudahkan kalian dalam belajar bahasa isyarat, dengan menggunakan website sebagai platformnya untuk memudahkan pengguna dalam mengakses kamus ini baik menggunakan komputer ataupun smartphone kamu, dengan sumber kosa kata dari pusbisindo (Pusat Bahasa Isyarat Indonesia). Akses mudah belajar cepat!</p>
                            <ul>
                                <?php
                                    $sql = "SELECT COUNT(*) as `count` FROM kamus";
                                    $query = $koneksi->query($sql);
                                    $data = $query->fetch_assoc();
                                ?>
                                <li> Memiliki <?php echo $data['count']?> Kosa Kata</li>
                                <li> Mudah diakses melalui smartphone anda ataupun komputer anda</li>
                                <li> Sumber data kosa kata dari pusbisindo</li>
                                <li> Mudah dalam melakukan pencarian kosa kata</li>
                            </ul>
                            <hr>
            </div>
        </div>
    </section>
    <!-- END OF TENTANG -->
    <!-- ARTIKEL -->
    <section class="artikeldepan">
        <div class="container">
            <div class="row">
            <form method="get" action="" class="form-box f-right ">
                                    <input type="text" name="kata" placeholder="Cari Artikel">
                                    
                                </form>
            <?php
                            if($kata!=''){
                                $isiartikel = $koneksi->query("select * from artikel WHERE `isi` LIKE '%$k%'");
                                while($teks = mysqli_fetch_array($isiartikel)){
                                    strtolower($k);?>
                <hr><a href="artikel/index.php?title=<?php echo $teks["judul"] ?>&id=<?php echo $teks["timestamp"] ?>">
                    <div class="card" style="width:100%; border:1px;">
                        <img class="card-img-top" src="assets/img/artikel/<?php echo $teks['gambar']?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $teks['judul']?></h4>
                        <p class="card-text">
                                                        <?php $string2 = strip_tags($teks['isi']);
                                                        if (strlen($string2) > 500) {

                                                            // truncate string
                                                            $stringCut2 = substr($string2, 0, 500);
                                                            $endPoint2 = strrpos($stringCut2, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string2 = $endPoint2? substr($stringCut2, 0, $endPoint2) : substr($stringCut2, 0);
                                                            $string2 .= '... <a href="artikel/index.php?title='.$teks["judul"].'&id='.$teks["timestamp"].'">Lanjut Baca</a>';
                                                        }
                                                        $find = array($kata, $k);
                                                        $replace   = array('<b>'.$kata.'</b>', '<b>'.$k.'</b>');
                                                        $text    = $string2;
                                                        $output  = str_replace($find, $replace, $text);
                                                        echo $output;
                                                        $hasil = $KMP->KMPSearch($k,strip_tags((strtolower($teks['isi']))));
                                                    ?>
                                                        </p>
                                                        <div class="alert alert-success">
                                                            <?php echo "Kata yang berhasil dicari pada artikel ini adalah ".count($hasil)."<br>";
                                                            echo "Kata yang dicari berada pada posisi ke ";
                                                            foreach($hasil as $h) echo $h." ";?></a>
                                                        </div>
                        </div>
                    </div></a>
                <hr>
                <?php
                                            }}
                                            else {
                                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                                            $page_no = $_GET['page_no'];
                                            } else {
                                                $page_no = 1;
                                                }
            
                                            $total_records_per_page = 10;
                                            $offset = ($page_no-1) * $total_records_per_page;
                                            $previous_page = $page_no - 1;
                                            $next_page = $page_no + 1;
                                            $adjacents = "2"; 
            
                                            $result_count = mysqli_query($koneksi,"SELECT COUNT(*) As total_records FROM `artikel`");
                                            $total_records = mysqli_fetch_array($result_count);
                                            $total_records = $total_records['total_records'];
                                            $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                            $second_last = $total_no_of_pages - 1; // total page minus 1
            
                                            $result = mysqli_query($koneksi,"SELECT * FROM `artikel` ORDER BY `id` DESC LIMIT $offset, $total_records_per_page ");
                                            while($row = mysqli_fetch_array($result)){?>
                                                        <hr><a href="artikel/index.php?title=<?php echo $row["judul"] ?>&id=<?php echo $row["timestamp"] ?>">
                                                        <div class="card" style="width:100%; border:1px;">
                                                        <img class="card-img-top" src="assets/img/artikel/<?php echo $row['gambar']?>" alt="Card image" style="width:100%">
                                                        <div class="card-body">
                                                        <h4 class="card-title"><?php echo $row['judul']?></h4>
                                                        <p class="card-text">
                                                                
                                                                    <?php $string = strip_tags($row['isi']);
                                                                    if (strlen($string) > 500) {
            
                                                                        // truncate string
                                                                        $stringCut = substr($string, 0, 500);
                                                                        $endPoint = strrpos($stringCut, ' ');
            
                                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                        $string .= '... <a href="artikel/index.php?title='.$row["judul"].'&id='.$row["timestamp"].'">Lanjut Baca</a>';
                                                                    }
                                                                    echo $string;?>
                                                                    </p>
                                                               
                                                                    </div>
                    </div></a>
                <hr>
                                            
                                            <?php
                                            }
                                                mysqli_close($koneksi);
                                            ?>     
                                            <nav class="blog-pagination justify-content-center d-flex">
                                                <ul class="pagination">
                                    <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
                                    
                                    <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                                    <a class='page-link' <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>  aria-label="Previous">Previous</a>
                                    </li>
                                    
                                    <?php 
                                    if ($total_no_of_pages <= 10){  	 
                                        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                            if ($counter == $page_no) {
                                        echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                                }else{
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                                }
                                        }
                                    }
                                    elseif($total_no_of_pages > 10){
                                        
                                    if($page_no <= 4) {			
                                    for ($counter = 1; $counter < 8; $counter++){		 
                                            if ($counter == $page_no) {
                                        echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                                }else{
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                                }
                                        }
                                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                        }

                                    elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                                        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                                        if ($counter == $page_no) {
                                        echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                                }else{
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                                }                  
                                    }
                                    echo "<li class='page-item'><a class='page-link'>...</a></li>";
                                    echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                                    echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                                            }
                                        
                                        else {
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                                        echo "<li class='page-item'><a class='page-link'>...</a></li>";

                                        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                        if ($counter == $page_no) {
                                        echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
                                                }else{
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                                }                   
                                                }
                                            }
                                    }
                                ?>
                                    
                                    <li class='page-item' <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                                    <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                                    </li>
                                    <?php if($page_no < $total_no_of_pages){
                                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                                        } ?>
                                    </ul>
                                </nav>
                                            <?php }?>
            </div>
        </div>
    </section>
    <!-- END OF ARTIKEL -->
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
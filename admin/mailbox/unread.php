<?php 
	session_start();
    
    if (!isset($_SESSION["username"])) {
        header("location:../login.php?status=belum_login");
    }
    include '../../assets/config.php';
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indonesia Sign Language</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>SL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>I</b>SL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php 
              $sql5 = "SELECT COUNT(*) as `count` FROM mailbox WHERE `read` = 'n'";
              $query5 = $koneksi->query($sql5);
              $data5 = $query5->fetch_assoc();
              echo $data5["count"]?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $data5["count"]?> messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php $datam = mysqli_query($koneksi,"SELECT * FROM mailbox WHERE `read` = 'n' ORDER BY id DESC LIMIT 5");
                    while($dm = mysqli_fetch_array($datam)){?>
                  <li><!-- start message -->
                    <a href="../mailbox/readm.php?id=<?php echo $dm['id']?>">
                      <div class="pull-left">
                        <i class="fa fa-envelope-o" style="font-size:30px;"></i>
                      </div>
                      <h4>
                        <?php echo $dm['name']?>
                        
                      </h4>
                      <p><?php echo $dm['subject']?></p>
                    </a>
                  </li>
                    <?php }?>
                </ul>
              </li>
              <li class="footer"><a href="../mailbox/index.php">See All Messages</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/dist/img/users/<?php echo $_SESSION["photo"]?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["username"]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/dist/img/users/<?php echo $_SESSION["photo"]?>" class="img-circle" alt="User Image">

                <p>
                    <?php echo $_SESSION["username"]?>
                    <small><?php echo $_SESSION["group"]?></small>
                </p>
              </li>
              <li class="user-footer">
              
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/dist/img/users/<?php echo $_SESSION["photo"]?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["username"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Main Menu</li>
        <li>
          <a href="../index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <?php if(!in_array($_SESSION['group'], array('admin', 'moderator'))){?>
        <li class="header">Users Control</li>
       
        <li>
          <a href="../users/index.php">
            <i class="fa fa-users"></i> <span>Users</span>
            
          </a>
        </li>
        <?php } ?>

        <li class="header">Content Management</li>
        
        <li>
          <a href="../article/index.php">
            <i class="fa fa-file-text-o"></i> <span>Article</span>
            
          </a>
        </li>
        <?php if(in_array($_SESSION['group'], array('superadmin', 'admin'))){?>
        <li>
          <a href="../dictionary/index.php">
            <i class="fa fa-book"></i> <span>Dictionary</span>
            
          </a>
        </li>
        <?php } ?>
        <li class="header">Contact</li>
        <li class="active">
          <a href="../mailbox/index.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <?php $sql5 = "SELECT COUNT(*) as `count` FROM mailbox WHERE `read` = 'n'";
                                    $query5 = $koneksi->query($sql5);
                                    $data5 = $query5->fetch_assoc();
                                    
              if ($data5["count"] > 0){
                ?>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $data5["count"]?></small>
            </span>
              <?php } ?>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="index.php"><i class="fa fa-inbox"></i> Inbox <?php if ($data5["count"] > 0){?>
                <span class="label label-primary pull-right"><?php echo $data5["count"]?></span><?php }?></a></li>
                <li class="active"><a href="unread.php"><i class="fa fa-envelope-o"></i> Unread <?php if ($data5["count"] > 0){?><span class="label label-success pull-right"><?php echo $data5["count"]?></span><?php }?></a></li>
                <li><a href="read.php"><i class="fa fa-envelope-open-o"></i> Readed</a></li>
                <li><a href="replied.php"><i class="fa  fa-paper-plane-o"></i> Replied</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Unread</h3>

              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="table-responsive mailbox-messages">
              <table id="example1" class="table table-hover table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM mailbox WHERE `read` = 'n' AND `replied` = 'n' ORDER BY `id` DESC");
                    while($d = mysqli_fetch_array($data)){                        
                    ?>
                    <tr>
                    
                    <td class="mailbox-star"><?php if($d['read']=='y'){ echo "<i class='fa fa-envelope-open-o'></i>";} else{ echo "<i class='fa fa-envelope-o'></i>";}?></td>
                    <td class="mailbox-name"><a href="read-mail.php?id=<?php echo $d['id'];?>"><?php echo $d['name'];?></a></td>
                    <td class="mailbox-subject"><b><?php $string = strip_tags($d['subject']);
                                                        if (strlen($string) > 18) {

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 18);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '...';
                                                        }
                                                        echo $string;?></b> - <?php $string2 = strip_tags($d['message']);
                                                        if (strlen($string2) > 70) {

                                                            // truncate string
                                                            $stringCut2 = substr($string2, 0, 70);
                                                            $endPoint2 = strrpos($stringCut2, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string2 = $endPoint2? substr($stringCut2, 0, $endPoint2) : substr($stringCut2, 0);
                                                            $string2 .= '...';
                                                        }
                                                        echo $string2;?>
                    </td>
                    <td class="mailbox-date"><?php echo time_elapsed_string("@".$d['timestamp']);?></td>
                  </tr>
                    <?php }?>
                    </tbody><tfoot>
                    <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Time</th>
                </tr>
                </tfoot>
              </table>
                
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.4.13
    </div>
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Sudirmansyah.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->
<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>
<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>

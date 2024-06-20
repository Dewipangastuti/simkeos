<?php 
  
  $sql = mysqli_query($con, "SELECT * FROM tb_user WHERE id='$_SESSION[id]'");
  $data = mysqli_fetch_array($sql);

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" href="../assets/img/logo.png" type="image/ico" />
    <style>
      .card {
        margin: 5px;
      }
    </style>  
    <title>Edelweiss Outdoor Salatiga</title>

    <!-- Bootstrap -->
    <link href="../assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../assets/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../assets/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../assets/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../assets/backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" >
    <div class="container body"style="background-color:#00a9c7">
      <div class="main_container" style="background-color:#00a9c7">
        <div class="col-md-3 left_col" style="background-color:#00a9c7">
          <div class="left_col scroll-view" style="background-color:#00a9c7">
            <div class="clearfix" style="background-color:#00a9c7"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix" style="background-color:#00a9c7">
              <div class="profile_pic">
                <img src="../assets/backend/images/<?= $data['image'] ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <!-- <span style="color: white;"><h4> Welcome,</h4></span> -->
                <h2><?= ucfirst($data['username']); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- <br/> -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="background-color:#00a9c7">
              <div class="menu_section">
                
                <ul class="nav side-menu" style="background-color:#00a9c7">
                  <li><a href="index.php?page=home"><i class="fa fa-home"></i> Home </span></a>
                  </li>
                  <li><a href="index.php?page=pemasukan"><i class="glyphicon glyphicon-floppy-save" style="font-size: 16px;"></i> &nbsp;&nbsp;&nbsp;Pemasukan </span></a>
                  </li>
                  <li><a href="index.php?page=pengeluaran"><i class="glyphicon glyphicon-floppy-open" style="font-size: 16px;"></i> &nbsp;&nbsp;&nbsp;Pengeluaran </span></a>
                  </li>
                  <li><a href="index.php?page=produk"><i class="fa fa-shopping-cart"></i> Produk</a>
                  </li>  
                  <li><a href="index.php?page=galeri"><i class="fa fa-image"></i> Galeri </span></a>
                  </li>               
                  <li><a><i class="fa fa-edit"></i> Rekaptulasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=report-harian">Laporan Harian</a></li>
                      <li><a href="index.php?page=report-bulanan">Laporan Bulanan</a></li>
                      <li><a href="index.php?page=report-tahunan">Laporan Tahunan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>
                <!-- top navigation -->
        <div class="top_nav" style="background-color:#00a9c7">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/backend/images/<?= $data['image'] ?>" alt=""><?= ucfirst($data['username']); ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="?page=detail-user"> Profile</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
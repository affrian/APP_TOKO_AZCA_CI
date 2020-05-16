<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WR. Application</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendors/daterangepicker/daterangepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendors/chartist/chartist.min.css');?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/images/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/media/css/dataTables.jqueryui.min.css'); ?>" /> 
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.0.0/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free-5.13.0-web/css/all.min.css') ?>">
    <!--font awesome  -->
  </head>
  <body>
    <link rel="stylesheet" id="url" href="<?php echo base_url() ?>">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="<?php echo base_url('dashboard'); ?>">
            <img src="<?php echo base_url('assets/template/images/logo.svg'); ?>" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url('assets/template/images/logo-mini.svg'); ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stallar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/template/images/faces/face10.jpg')?>" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/template/images/faces/face12.jpg');?>" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/template/images/faces/face1.jpg'); ?>" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo base_url('assets/template/images/faces/face8.jpg'); ?>" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo base_url('assets/template/images/faces/face8.jpg'); ?>" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->

      <div class="container-fluid page-body-wrapper "  style="padding-left:0 !important">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo base_url('assets/template/images/faces/face8.jpg'); ?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Master</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Barang</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('kategori') ?>">Kategori Barang</a></li>
                     <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('multi_satuan') ?>">Barang Multi Satuan</a></li> -->
                   <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('barang') ?>">Jenis-Jenis Barang</a></li>
                    
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('satuan') ?>">Satuan Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('lokasi_brg') ?>">Lokasi Barang</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('karyawan') ?>">
                <span class="menu-title">Karyawan</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('supplier') ?>">
                <span class="menu-title">Supplier</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('cabang') ?>">
                <span class="menu-title">Cabang</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
          
            <li class="nav-item nav-category"><span class="nav-link">Transaksi</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">All Transaksi</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Pembelian Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Penjualan Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Retur Pembelian</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Retur Penjualan</a></li>
                   <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Transfer Barang </a></li>
                 
                </ul>
              </div>
            </li>

            <li class="nav-item nav-category"><span class="nav-link">Laporan</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#mn_lap" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">All Laporan</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="mn_lap">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Laporan Pembelian</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Laporan Penjualan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Laporan Stok/lokasi </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Laporan Harga Barang</a></li>
                   <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Laporan Barang Kadaluarsa</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Laporan Laba Rugi</a></li>
                   <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Laporan Kas</a></li>
                 
                </ul>
              </div>
            
          </ul>
        </nav>

         <div class="main-panel">
          <div class="content-wrapper">
                <?php $this->load->view($page); ?>

               
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
           <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="wari-cv.github.io" target="_blank">WR Application</a>.<i class="icon-heart text-danger"></i> </span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with </span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
      
      <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
    <!-- plugins:js -->
   <!--  <script src="<?php echo base_url('assets/template/vendors/js/vendor.bundle.base.js'); ?>"></script> -->
   <script src="<?php echo base_url('assets/bootstrap-4.0.0/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/template/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- <script src="<?php echo base_url('assets/template/vendors/chartist/chartist.min.js'); ?>"></script> -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/template/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/js/misc.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/template/js/dashboard.js'); ?>"></script>
    <!-- End custom js for this page -->
    <!-- new js -->
    <script src="<?php echo base_url('assets/js/customjs.js'); ?>"></script>
  </body>
</html>
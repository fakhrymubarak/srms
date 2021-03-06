<?php
$controller = $data;
?>

<body class="top-navbar-fixed">
  <div class="main-wrapper">

    <!-- NAVBAR -->
    <nav class="navbar top-navbar bg-white box-shadow">
      <div class="container-fluid">
        <div class="row">
          <div class="navbar-header no-padding">
            <a class="navbar-brand" href="<?= BASE_URL . $controller; ?>/dashboard">Sistem Manajemen Akademik Sekolah
            </a>
            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Navigasi</span>
              <i class="fa fa-ellipsis-v"></i>
            </button>
            <button type="button" class="navbar-toggle mobile-nav-toggle">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <li><a href="<?= BASE_URL . $controller; ?>/logout" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
            <!-- /.nav navbar-nav navbar-right -->
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </nav>
<?php
$controller = $data
?>

<body>
  <nav class="navbar top-navbar bg-white box-shadow">
    <div class="container-fluid">
      <div class="row">
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

            <?php if ($controller == "admin") { ?>
              <li><a href="<?= BASE_URL; ?>admin/rapor" class="color-primary text-center"><i class="fa fa-sign-in"></i> Kembali Daftar Rapor</a>
              <?php } elseif ($controller == "guru") { ?>
              <li><a href="<?= BASE_URL; ?>guru/login" class="color-primary text-center"><i class="fa fa-sign-in"></i> Kembali Daftar Rapor</a>
              <?php } elseif ($controller == "siswa") { ?>
              <li><a href="<?= BASE_URL; ?>siswa/index" class="color-primary text-center"><i class="fa fa-sign-in"></i> Kembali</a>
              <?php }  ?>

              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<?php
$success = $data;

?>
<div class="main-page">
  <div class="container-fluid">
    <div class="row page-title-div">
      <div class="col-md-6">
        <h2 class="title">Buat Periode Baru</h2>
      </div>
    </div>

    <div class="row breadcrumb-div">
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Buat Periode Baru</li>
        </ul>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <section class="section">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">
                <h5>Buat Periode</h5>
              </div>
            </div>

            <div class="panel-body">

              <?php if ($success == "true") { ?>
                <div class="alert alert-success left-icon-alert" role="alert">
                  <strong>Berhasil</strong>
                </div>

              <?php } else if ($success == "false") { ?>

                <div class="alert alert-danger left-icon-alert" role="alert">
                  <strong>Error</strong>
                </div>
              <?php } ?>

              <form class="form-horizontal" method="post" action="<?= BASE_URL; ?>admin\runTambahPeriode">
                <div class="form-group">
                  <label for="periode" class="col-sm-2 control-label">Tahun Ajaran:</label>
                  <div class="col-sm-10">
                    <input type="text" name="periode" class="form-control" id="periode" placeholder="2020/2021" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="semester" class="col-sm-2 control-label">Semester:</label>
                  <div class="col-sm-10">
                    <select name="semester" class="form-control" id="semester" required>
                      <option value="Ganjil">Ganjil</option>
                      <option value="Genap">Genap</option>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Buat</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
</div>
</div>
<style>
  .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
  }

  .succWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
  }
</style>

<body class="top-navbar-fixed">
  <div class="main-wrapper">
    <?php include('includes/topbar.php'); ?>
    <div class="content-wrapper">
      <div class="content-container">
        <?php include('includes/leftbar.php'); ?>
        <div class="main-page">
          <div class="container-fluid">
            <div class="row page-title-div">
              <div class="col-md-6">
                <h2 class="title">Kelola Data Siswa</h2>
              </div>
            </div>

            <div class="row breadcrumb-div">
              <div class="col-md-6">
                <ul class="breadcrumb">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                  <li> Siswa</li>
                  <li class="active">Kelola Data Siswa</li>
                </ul>
              </div>
            </div>
          </div>

          <section class="section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">

                  <div class="panel">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <h5>Lihat Informasi Siswa</h5>
                      </div>
                    </div>
                    <?php if ($msg) { ?>
                      <div class="alert alert-success left-icon-alert" role="alert">
                        <strong>Berhasil</strong><?php echo htmlentities($msg); ?>
                      </div><?php } else if ($error) { ?>
                      <div class="alert alert-danger left-icon-alert" role="alert">
                        <strong>Error</strong> <?php echo htmlentities($error); ?>
                      </div>
                    <?php } ?>
                    <div class="panel-body p-20">

                      <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama </th>
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Tgl Registrasi</th>
                            <th>Status</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId";
                          $query = $dbh->prepare($sql);
                          $query->execute();
                          $results = $query->fetchAll(PDO::FETCH_OBJ);
                          $cnt = 1;
                          if ($query->rowCount() > 0) {
                            foreach ($results as $result) {   ?>
                              <tr>
                                <td><?php echo htmlentities($cnt); ?></td>
                                <td><?php echo htmlentities($result->StudentName); ?></td>
                                <td><?php echo htmlentities($result->RollId); ?></td>
                                <td><?php echo htmlentities($result->ClassName); ?>(<?php echo htmlentities($result->Section); ?>)</td>
                                <td><?php echo htmlentities($result->RegDate); ?></td>
                                <td><?php if ($result->Status == 1) {
                                      echo htmlentities('Active');
                                    } else {
                                      echo htmlentities('Blocked');
                                    }
                                    ?></td>
                                <td>
                                  <a href="edit-student.php?stid=<?php echo htmlentities($result->StudentId); ?>"><i class="fa fa-edit" title="Edit Record"></i> </a>

                                </td>
                              </tr>
                          <?php $cnt = $cnt + 1;
                            }
                          } ?>


                        </tbody>
                      </table>
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

  <!-- ========== COMMON JS FILES ========== -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/pace/pace.min.js"></script>
  <script src="js/lobipanel/lobipanel.min.js"></script>
  <script src="js/iscroll/iscroll.js"></script>

  <!-- ========== PAGE JS FILES ========== -->
  <script src="js/prism/prism.js"></script>
  <script src="js/DataTables/datatables.min.js"></script>

  <!-- ========== THEME JS ========== -->
  <script src="js/main.js"></script>
  <script>
    $(function($) {
      $('#example').DataTable();

      $('#example2').DataTable({
        "scrollY": "300px",
        "scrollCollapse": true,
        "paging": false
      });

      $('#example3').DataTable();
    });
  </script>
</body>

</html>
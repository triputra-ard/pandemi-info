<?php
$titlePage = "Dasbor";
$currentpage = "home";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title text-white">Dasbor Administrator :  <small><?php echo @$_SESSION['admin_name']; ?></small> </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">
                  <?php
                  $sql = "SELECT*FROM `pandemi.info`";
                  $query = mysqli_query($db,$sql);
                  while ($index = mysqli_fetch_assoc($query)) {
                    $positive = $index['all_case']-$index['death_case']-$index['cured_case'];
                    $current_time = $index['info_time'];
                    $replace_time = strtotime($current_time);
                    $date = date("d M Y", $replace_time);
                    $time = date("H:i",$replace_time);
                   ?>
                  <div class="row">

                    <div class="col-xl-12" >
                      <div class="card">
                        <div class="card-body">
                          <div class="d-inline-block">
                            <h1>Pandemi Terkini :</h1>
                            <h2><?php echo $index['id_pandemi']; ?></h2>
                          </div>
                          <a class="btn float-right btn-primary btn-rounded" href="pandemi.view" title="Perbarui informasi">
                            <i class="fas fa-angle-double-left"></i> Perbarui
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3" >
                      <div class="card bg-warning">
                        <div class="card-body">
                          <div class="d-inline-block">
                            <h5 class="text-white">Kasus Positif</h5>
                            <h2 class="mb-0 text-white"><?php echo number_format($positive,0,',','.'); ?></h2>
                          </div>
                          <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                            <i class="fas fa-hospital" style="font-size:36px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3">
                      <div class="card bg-danger">
                        <div class="card-body">
                          <div class="d-inline-block">
                            <h5 class="text-white">Kasus Meninggal</h5>
                            <h2 class="mb-0 text-white"><?php echo number_format($index['death_case'],0,',','.'); ?></h2>
                          </div>
                          <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                            <i class="fas fa-procedures" style="font-size:36px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3" >
                      <div class="card bg-success">
                        <div class="card-body">
                          <div class="d-inline-block">
                            <h5 class="text-white">Kasus Sembuh</h5>
                            <h2 class="mb-0 text-white"><?php echo number_format($index['cured_case'],0,',','.'); ?></h2>
                          </div>
                          <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                            <i class="fas fa-heart" style="font-size:36px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3" >
                      <div class="card bg-info">
                        <div class="card-body">
                          <div class="d-inline-block">
                            <h5 class="text-white">Total kasus</h5>
                            <h2 class="mb-0 text-white"><?php echo number_format($index['all_case'],0,',','.'); ?></h2>
                          </div>
                          <div class="float-right icon-circle-medium icon-box-lg bg-light mt-1">
                            <i class="fas fa-syringe" style="font-size:36px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>

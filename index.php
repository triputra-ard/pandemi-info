<?php
$titlePage = "Beranda";
$currentpage = "home";
require_once 'includes/navigation.common.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <!-- Start Section -->
            <section>
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

                <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000">
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

                <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="300">
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

                <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="400">
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

                <div class="col-xl-3" data-aos="zoom-in-up" data-aos-duration="4000" data-aos-delay="500">
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

                <div class="col-xl-12" data-aos="zoom-in-up" data-aos-delay="600">
                  <div class="card">
                    <div class="card-body">
                      <h2><?php echo $index['id_pandemi']; ?></h2>
                      <h4 class="text-center">Diperbarui : <?php echo $date ?>, <?php echo $time; ?></h4>
                    </div>
                  </div>
                </div>

              </div>
            <?php } ?>
            </section>
            <!--End section -->

                <!-- ============================================================== -->
            </div>
        </div>
<?php include 'includes/authors.footer.php'; ?>

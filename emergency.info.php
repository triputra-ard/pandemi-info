<?php
$titlePage = "Informasi Darurat";
$currentpage = "info";
require_once 'includes/navigation.common.php'; ?>
    <div class="page-wrapper">
        <div class="container">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <!-- Start Section -->
            <section>
              <div class="col-xl-12">
                <div class="card bg-danger">
                  <div class="card-body">
                    <h3 class="text-white">Informasi Darurat Lokal</h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="card fully-transparent">
                  <div class="card-body">
                    <div class="row">
                      <?php
                      $paging = 8;
                      $pages = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                      $number = 1;
                      $start = ($pages>1) ? ($pages * $paging) - $paging : 0;
                      $previous = $pages - 1;
                      $next = $pages + 1;

                      $sqlresult = "SELECT * FROM `pandemi.localinfo`";
                      $resultquery = mysqli_query($db,$sqlresult);
                      $totalpage = mysqli_num_rows($resultquery);



                      $sql1 = "SELECT * FROM `pandemi.localinfo`
                      LIMIT $start, $paging
                      ";
                      $querys = mysqli_query($db,$sql1);
                      while ($erlocal = mysqli_fetch_assoc($querys)) {
                      ?>
                      <div class="col-xl-3">
                        <div data-aos="flip-up" data-aos-delay="300" class="card">
                            <div class="card-header">
                                <h5>
                                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#<?php echo $erlocal['id_province']; ?>" aria-controls="<?php echo $erlocal['id_province']; ?>">
                                     <span class="fas fa-angle-down mr-2"></span><?php echo $erlocal['province_name']; ?>
                                 </button></h5>
                            </div>
                            <div class="collapse" id="<?php echo $erlocal['id_province']; ?>">
                              <div class="card-body" >
                                <a class="text-primary" href="<?php echo $erlocal['website']; ?>"><?php echo $erlocal['website']; ?><i class="fas fa-external-link-alt"></i> </a>
                              </div>
                            </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                  </div>
                </div>
              </div>
              <?php include 'function/pagination.php'; ?>
            </section>
            <!--End section -->

                <!-- ============================================================== -->
          </div>
      </div>
<?php include 'includes/authors.footer.php'; ?>

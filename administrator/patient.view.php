<?php
$titlePage = "Lihat Diagnosa Pengguna";
$currentpage = "patient";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <?php include 'notification.code.php'; ?>
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                          <h2 class="pageheader-title text-white">Informasi Diagnosa Pasien</h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">


                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Info Diagnosa</h4>
                    </div>
                    <div class="card-body">
                      <?php include 'view/view.diagnosis.patient.php'; ?>
                    </div>
                  </div>
                </div>


            </div>

            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>

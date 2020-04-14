<?php
$titlePage = "Tambah Gejala Diagnosa";
$currentpage = "diagnosis";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
  <?php include 'notification.code.php'; ?>
    <?php if (isset($_GET['edit'])): ?>
      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">

              <!-- ============================================================== -->
              <!-- pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="page-header">
                          <h2 class="pageheader-title text-white">Gejala Diagnosa</h2>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
              <div class="ecommerce-widget">

                  <div class="card transparent" id="forms">
                    <div class="card-header">
                      <h4>Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                      <?php include 'model/form.symptoms.edit.php'; ?>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    <?php else: ?>
      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">

              <!-- ============================================================== -->
              <!-- pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="page-header">
                          <h2 class="pageheader-title text-white">Gejala Diagnosa</h2>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
              <div class="ecommerce-widget">

                  <div class="card transparent" id="forms">
                    <div class="card-header">
                      <h4>Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                      <?php include 'model/form.symptoms.new.php'; ?>
                    </div>
                  </div>
              </div>
              <!-- View Section -->
                <div class="ecommerce-widget">

                    <div class="card" id="view">
                      <div class="card-header">
                        <h4>Lihat Data</h4>
                      </div>
                      <div class="card-body">
                        <?php include 'view/view.symptoms.php'; ?>
                      </div>
                    </div>
                </div>
          </div>
      </div>
    <?php endif; ?>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>

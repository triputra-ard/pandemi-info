<?php
$titlePage = "Relasi Diagnosa";
$currentpage = "diagnosis";
include 'navigation.admin.php'; ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
  <?php include 'notification.code.php'; ?>
      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">

              <!-- ============================================================== -->
              <!-- pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="page-header">
                          <h2 class="pageheader-title text-white">Tambah Hasil Diagnosa</h2>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
              <div class="ecommerce-widget">

                  <div class="card transparent">
                    <div class="card-header" id="forms">
                      <h4>Form Tambah Data</h4>
                    </div>
                    <div class="card-body">
                      <?php if (isset($_GET['edit'])): ?>
                        <?php include 'model/form.relation.edit.php'; ?>
                        <br>
                        <div class="col-xl-12 offset-xl-5">
                          <a href="?" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Baru</a>
                        </div>
                        <?php else: ?>
                          <?php include 'model/form.relation.new.php'; ?>
                      <?php endif; ?>
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
                        <?php include 'view/view.diagnosis.php'; ?>
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

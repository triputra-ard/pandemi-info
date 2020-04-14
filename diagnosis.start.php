<?php
$titlePage = "Diagnosa";
$currentpage = "diagnosis";
require_once 'includes/navigation.common.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <!-- Start Section -->
            <section>
            <?php if (isset($_GET['start'])): ?>
              <div class="col-xl-6 offset-xl-3">
                <div class="card">
                  <div class="card-body">
                    <h4><big class="text-success"><center>Diagnosa berikut bukan merupakan diagnosa dokter atau petugas medis.</center></big>
                      Diagnosa berikut merupakan prakiraan gejala umum yang diberikan WHO.<br>
                      Sampai saat ini belum ada gejala resmi dari Pandemi Covid-19.<br>
                      Apabila gejala anda sama seperti gejala covid-19 <b class="text-danger">mohon hubungi petugas medis setempat</b> untuk penanganan lebih lanjut</h4>
                      <br>
                      <h5 class="float-right text-info">Dibuat dengan Kecerdasan Buatan - Backward Chaining</h5>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 offset-xl-3">
                <div class="card">
                  <div class="card-body">
                      <a href="?symptoms" class="btn btn-primary btn-block"> Mulai diagnosa</a>
                  </div>
                </div>
              </div>
            </section>

            <section>
            <?php elseif (isset($_GET['symptoms'])): ?>
                <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="300">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Pilih salah satu gejala berikut</h3>
                      <h4 class="text-center">Berdasarkan yang anda alami saat ini</h4>
                    </div>
                  </div>
                </div>
                <?php
                $sql = "SELECT * from `pandemi.symptoms`";
                $query = mysqli_query($db,$sql);
                while ($symptoms = mysqli_fetch_assoc($query)) {
                 ?>
                 <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="400">
                   <div class="card transparent-white">
                     <div class="card-body">
                       <a href="diagnosis.question?question&start=<?php echo encrypt($symptoms['id_symptoms']); ?>" class="btn btn-primary btn-block"><?php echo $symptoms['symptoms'];?></a>
                     </div>
                   </div>
                 </div>
               <?php } ?>
            </section>
            <!--End section -->
            <?php endif; ?>
                <!-- ============================================================== -->
            </div>
        </div>
<?php include 'includes/authors.footer.php'; ?>

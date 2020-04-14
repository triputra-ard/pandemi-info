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
            <?php if (isset($_GET['result'])): ?>
              <?php $get = decrypt($_GET['result']) ?>
              <div class="col-xl-6 offset-xl-3">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $sqlresult = "SELECT * From `pandemi.result`
                    WHERE id_result = '$get'
                    ";
                    $queryresult = mysqli_query($db, $sqlresult); ?>
                    <?php if (mysqli_num_rows($queryresult) === 0): ?>
                      <h2 class="text-center">Oh.. Ini tidak benar, jangan khawatir kami akan memperbaikinya segera.</h2>
                    <?php else: ?>
                      <?php while ($result = mysqli_fetch_array($queryresult)) {
                       ?>
                       <h3 class="text-center">Hasil diagnosa :</h3>
                       <h1 class="text-center text-danger"><?php echo $result['result_name']; ?> </h1>
                       <br>
                        <p><?php echo $result['result_description']; ?></p>
                        <br>
                        <form>
                          <button type="submit" class="btn btn-primary btn-block" name="send" value="<?php echo encrypt($result['id_result']); ?>">
                            <i class="fas fa-envelope"> Kirim ke email saya</i>
                          </button>
                        </form>
                     <?php } ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </section>

            <section>
            <?php elseif (isset($_GET['send'])): ?>
                <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="300">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center">Tentu.. mohon masukkan email anda dibawah ini</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="400">
                  <div class="card transparent-white">
                    <div class="card-body">
                      <?php include 'model/form.email.php'; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </section>
            <!--End section -->

                <!-- ============================================================== -->
            </div>
        </div>
<?php include 'includes/authors.footer.php'; ?>

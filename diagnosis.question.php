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
            <?php if (isset($_GET['question'])): ?>
              <?php $id = decrypt($_GET['start']);?>
              <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="300">
                <div class="card bg-dark">
                  <div class="card-body">
                    <?php
                    $sql = "SELECT * From `pandemi.diagnosis` a
                    Left join `pandemi.question` b ON a.diagnosis_patient = b.id_question
                    WHERE a.diagnosis_symptoms = '$id' And a.is_start = 'Y'
                    ";
                    $query = mysqli_query($db, $sql);
                    $question = mysqli_fetch_array($query);
                     ?>
                    <?php if (mysqli_num_rows($query) === 0): ?>
                      <h1 class="text-white">Oh sepertinya ada yang salah. Jangan khawatir kami akan memperbaikinya segera.</h1>
                    <?php else: ?>
                      <h2 class="text-white"><?php echo $question['patient_symptoms']; ?></h2>

                      <?php include 'model/form.symptoms.php'; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            </section>

            <section>
            <?php elseif(isset($_GET['symptoms'])): ?>
              <?php $get = decrypt($_GET['symptoms']);?>
              <?php $getsymptoms = decrypt($_GET['first_symptoms']); ?>
              <div class="col-xl-6 offset-xl-3" data-aos="fade-right" data-aos-delay="300">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $sql = "SELECT * From `pandemi.diagnosis` a
                    Left join `pandemi.question` b ON a.diagnosis_patient = b.id_question
                    WHERE a.diagnosis_patient = '$get' and a.diagnosis_symptoms = '$getsymptoms'
                    ";
                    $query = mysqli_query($db, $sql);
                    $diagnosis = mysqli_fetch_array($query);
                     ?>
                        <?php if (mysqli_num_rows($query) === 0): ?>
                              <h3>Hmm... Ini tidak benar, jangan khawatir kami akan memperbaikinya segera.</h3>
                        <?php else: ?>
                          <?php if($diagnosis['is_end'] != "Y"): ?>
                            <h2><?php echo $diagnosis['patient_symptoms']; ?></h2>

                            <?php include 'model/form.question.php'; ?>
                          <?php else: ?>
                            <?php if ($diagnosis['is_end'] != "N"): ?>
                              <a href="diagnosis.end?result=<?php echo encrypt($diagnosis['diagnosis_patient']); ?>" class="btn btn-block btn-info">Lihat Diagnosa <i class="fas fa-angle-double-right"></i> </a>
                            <?php endif; ?>
                        <?php endif; ?>
                     <?php endif; ?>
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

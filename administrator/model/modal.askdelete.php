<div id="<?php echo $view['id_pandemi']; ?>" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg animated--grow-in" role="document">
          <div class="modal-content">
            <div class="modal-body bg-danger">
              <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <b><?php echo $view['id_pandemi']; ?></b> ?</h4>
              <br>
              <center>
              <a href="control/script.pandemi?delete&id=<?php echo encrypt($view['id_pandemi']); ?>" class="btn btn-success" >Ya</a>
              <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
            </center>
            </div>
          </div>
      </div>
</div>
<!-- =============================== Pandemi End ============================================== -->
<div id="symptoms-<?php echo $view['id_symptoms']; ?>" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg animated--grow-in" role="document">
          <div class="modal-content">
            <div class="modal-body bg-danger">
              <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <b><?php echo $view['symptoms']; ?></b> ?</h4>
              <br>
              <center>
              <a href="control/script.symptoms?delete&id=<?php echo encrypt($view['id_symptoms']); ?>" class="btn btn-success" >Ya</a>
              <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
            </center>
            </div>
          </div>
      </div>
</div>
<!-- =============================== Symptoms End ============================================== -->
<div id="question-<?php echo $view['id_question']; ?>" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg animated--grow-in" role="document">
          <div class="modal-content">
            <div class="modal-body bg-danger">
              <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <br><?php echo $view['patient_symptoms']; ?> ?</h4>
              <br>
              <center>
              <a href="control/script.question?delete&id=<?php echo encrypt($view['id_question']); ?>" class="btn btn-success" >Ya</a>
              <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
            </center>
            </div>
          </div>
      </div>
</div>
<!-- =============================== Question End ============================================== -->
<div id="result-<?php echo $view['id_result']; ?>" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg animated--grow-in" role="document">
          <div class="modal-content">
            <div class="modal-body bg-danger">
              <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <b><?php echo $view['result_name']; ?></b> ?</h4>
              <br>
              <center>
              <a href="control/script.result?delete&id=<?php echo encrypt($view['id_result']); ?>" class="btn btn-success" >Ya</a>
              <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
            </center>
            </div>
          </div>
      </div>
</div>
<!-- =============================== Result End ============================================== -->
<div id="relation-<?php echo $view['id_diagnosis'];?>" class="modal fade" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg animated--grow-in" role="document">
          <div class="modal-content">
            <div class="modal-body bg-danger">
              <h4 class="text-lg text-white text-center">Anda yakin ingin menghapus <br>
                 <b><?php echo $view['diagnosis']; ?><?php echo $view['diagnosis_r']; ?></b> ?</h4>
              <br>
              <center>
              <a href="control/script.diagnosis?delete&id=<?php echo encrypt($view['id_diagnosis']); ?>" class="btn btn-success" >Ya</a>
              <button class="btn btn-dark btn-outline" type="button" data-dismiss="modal">Tidak </button>
            </center>
            </div>
          </div>
      </div>
</div>

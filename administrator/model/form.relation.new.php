<form id="form" action="control/script.diagnosis" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo autokode("`pandemi.diagnosis`","D-"); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Pilih Gejala</label>
    </div>
    <div class="col-xl-4">
      <select class="selectpicker form-control" name="symptoms" required data-live-search="true">
        <option value="">-Pilih-</option>
        <?php
        $sqlsymptoms = "SELECT*from `pandemi.symptoms`";
        $query = mysqli_query($db,$sqlsymptoms);
        while ($symptoms = mysqli_fetch_assoc($query)) {
         ?>
         <option value="<?php echo $symptoms['id_symptoms']; ?>"><?php echo $symptoms['id_symptoms']; ?> - <?php echo $symptoms['symptoms']; ?></option>
       <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Pilih Pertanyaan atau Hasil</label>
    </div>
    <div class="col-xl-4">
      <select class="selectpicker form-control" name="diagnosis" required data-live-search="true">
        <option value="">-Pilih-</option>
        <optgroup label="Pertanyaan">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.question`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($question = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $question['id_question']; ?>"><?php echo $question['id_question'] ?> - <?php echo substr($question['patient_symptoms'], 0, 100); ?></option>
         <?php } ?>
        </optgroup>
        <optgroup label="Hasil">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.result`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($result = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $result['id_result']; ?>"><?php echo $result['id_result']; ?> - <?php echo $result['result_name']; ?></option>
         <?php } ?>
        </optgroup>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Jawaban Ya</label>
    </div>
    <div class="col-xl-4">
      <select class="selectpicker form-control" name="is_yes" required data-live-search="true">
        <option value="">-Pilih-</option>
        <optgroup label="Selesai">
          <option value="0">Selesai</option>
        </optgroup>
        <optgroup label="Pertanyaan">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.question`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($question = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $question['id_question']; ?>"><?php echo $question['id_question']; ?> - <?php echo substr($question['patient_symptoms'], 0, 100); ?></option>
         <?php } ?>
        </optgroup>
        <optgroup label="Hasil">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.result`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($result = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $result['id_result']; ?>"><?php echo $result['id_result']; ?> - <?php echo $result['result_name']; ?></option>
         <?php } ?>
        </optgroup>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Jawaban Tidak</label>
    </div>
    <div class="col-xl-4">
      <select class="selectpicker form-control" name="is_no" required data-live-search="true">
        <option value="">-Pilih-</option>
        <optgroup label="Selesai">
          <option value="0">Selesai</option>
        </optgroup>
        <optgroup label="Pertanyaan">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.question`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($question = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $question['id_question']; ?>"><?php echo $question['id_question']; ?> - <?php echo substr($question['patient_symptoms'], 0, 100); ?></option>
         <?php } ?>
        </optgroup>
        <optgroup label="Hasil">
          <?php
          $sqlsymptoms = "SELECT*from `pandemi.result`";
          $query = mysqli_query($db,$sqlsymptoms);
          while ($result = mysqli_fetch_assoc($query)) {
           ?>
           <option value="<?php echo $result['id_result']; ?>"><?php echo $result['id_result']; ?> - <?php echo $result['result_name']; ?></option>
         <?php } ?>
        </optgroup>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white"> Mulai ? </label>
    </div>
    <div class="col-xl-6">
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_start" value="Y" checked="" class="custom-control-input"><span class="custom-control-label text-white">Ya</span>
      </label>
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_start" value="N" class="custom-control-input"><span class="custom-control-label text-white">Tidak</span>
      </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white"> Selesai ? </label>
    </div>
    <div class="col-xl-6">
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_end" value="Y" checked="" class="custom-control-input"><span class="custom-control-label text-white">Ya</span>
      </label>
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_end" value="N" class="custom-control-input"><span class="custom-control-label text-white">Tidak</span>
      </label>
    </div>
  </div>

  <button type="submit" name="new" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
</form>

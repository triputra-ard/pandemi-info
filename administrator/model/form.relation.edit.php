<?php
$id = decrypt($_GET['id']);

$sql = "SELECT DISTINCT id_diagnosis,
 diagnosis_symptoms, diagnosis_patient, diagnosis_yes, diagnosis_no,
 symptoms, diagnosis, answer_yes, answer_no,
 diagnosis_r, answer_yes_r, answer_no_r,
 is_start, is_end FROM
(
SELECT a.id_diagnosis, a.diagnosis_symptoms, a.diagnosis_patient,
a.diagnosis_yes, a.diagnosis_no, a.is_start, a.is_end,
b.symptoms as symptoms,
d.patient_symptoms as answer_yes,
e.patient_symptoms as answer_no,
c.patient_symptoms as diagnosis,
f.result_name as answer_yes_r,
g.result_name as answer_no_r,
h.result_name  as diagnosis_r
From `pandemi.diagnosis` a
Left join `pandemi.symptoms` b ON a.diagnosis_symptoms = b.id_symptoms
Left join `pandemi.question` c ON a.diagnosis_patient = c.id_question
Left join `pandemi.question` d ON a.diagnosis_yes = d.id_question
Left join `pandemi.question` e ON a.diagnosis_no = e.id_question
Left join `pandemi.result`   f ON a.diagnosis_yes = f.id_result
Left join `pandemi.result`   g ON a.diagnosis_no = g.id_result
Left join `pandemi.result`   h ON a.diagnosis_patient = h.id_result
)`pandemi.diagnosis` WHERE id_diagnosis = '$id'
";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.diagnosis" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_diagnosis']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Pilih Gejala</label>
    </div>
    <div class="col-xl-4">
      <select class="form-control" name="symptoms" required>
        <option value="<?php echo $view['diagnosis_symptoms']; ?>">
          <?php echo $view['diagnosis_symptoms']; ?>
          <?php echo $view['symptoms']; ?></option>
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
        <option value="<?php echo $view['diagnosis_patient']; ?>">
          <?php echo $view['diagnosis_patient']; ?>
          <?php echo $view['diagnosis']; ?>
          <?php echo $view['diagnosis_r']; ?>
        </option>
        <option value="">-Pilih-</option>
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
      <label class="text-white">Jawaban Ya</label>
    </div>
    <div class="col-xl-4">
      <select class="selectpicker form-control" name="is_yes" required data-live-search="true">
        <option value="<?php echo $view['diagnosis_yes']; ?>">
          <?php echo $view['diagnosis_yes']; ?>
          <?php echo $view['answer_yes']; ?>
          <?php echo $view['answer_yes_r']; ?>
        </option>
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
        <option value="<?php echo $view['diagnosis_no']; ?>">
          <?php echo $view['diagnosis_no']; ?>
          <?php echo $view['answer_no']; ?>
          <?php echo $view['answer_no_r']; ?>
        </option>
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
            <input required type="radio" name="is_start" value="Y" <?php if($view['is_start'] == 'Y') echo 'checked=""'; ?> class="custom-control-input"><span class="custom-control-label text-white">Ya</span>
      </label>
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_start" value="N" <?php if($view['is_start'] == 'N') echo 'checked=""'; ?> class="custom-control-input"><span class="custom-control-label text-white">Tidak</span>
      </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-2">
      <label class="text-white"> Selesai ? </label>
    </div>
    <div class="col-xl-6">
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_end" value="Y" <?php if($view['is_end'] == 'Y') echo 'checked=""'; ?> class="custom-control-input"><span class="custom-control-label text-white">Ya</span>
      </label>
      <label class="custom-control custom-radio custom-control-inline">
            <input required type="radio" name="is_end" value="N" <?php if($view['is_end'] == 'N') echo 'checked=""'; ?> class="custom-control-input"><span class="custom-control-label text-white">Tidak</span>
      </label>
    </div>
  </div>

  <button type="submit" name="edit" class="btn btn-block btn-primary"><i class="fas fa-edit"></i> Perbarui</button>
</form>
<?php } ?>

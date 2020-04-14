<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nomor Diagnosa</th>
      <th>Gejala</th>
      <th>Pertanyaan/Hasil</th>
      <th>Jawaban Ya</th>
      <th>Jawaban Tidak</th>
      <th>Mulai</th>
      <th>Selesai</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT DISTINCT id_diagnosis, symptoms,
       diagnosis, answer_yes, answer_no,
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
    )`pandemi.diagnosis`
      ";
      $query = mysqli_query($db,$sql) or die(mysqli_error($db));

      while ($view = mysqli_fetch_assoc($query)) {

       ?>
       <tr>
         <td><?php echo $view['id_diagnosis']; ?></td>
         <td><?php echo $view['symptoms']; ?></td>
         <td><?php echo $view['diagnosis']; ?><?php echo $view['diagnosis_r']; ?></td>
         <td><?php echo $view['answer_yes']; ?><?php echo $view['answer_yes_r']; ?></td>
         <td><?php echo $view['answer_no'];?><?php echo $view['answer_no_r'];?></td>
         <td><?php echo $view['is_start']; ?></td>
         <td><?php echo $view['is_end']; ?></td>
         <td>
           <a href="?edit&id=<?php echo encrypt($view['id_diagnosis']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
           <a href="#" data-target="#relation-<?php echo $view['id_diagnosis']; ?>" data-toggle="modal" title="Hapus" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nomor Pertanyaan</th>
      <th>Pertanyaan</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.question`";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {

       ?>
       <tr>
         <td><?php echo $view['id_question']; ?> </td>
         <td><?php echo $view['patient_symptoms']; ?></td>
         <td>
           <a href="question.add?edit&id=<?php echo encrypt($view['id_question']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
           <a href="#" data-target="#question-<?php echo $view['id_question']; ?>" data-toggle="modal" title="Hapus" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

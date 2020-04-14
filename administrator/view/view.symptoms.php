<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nomor Gejala</th>
      <th>Gejala</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.symptoms`";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {

       ?>
       <tr>
         <td><?php echo $view['id_symptoms']; ?> </td>
         <td><?php echo $view['symptoms']; ?></td>
         <td>
           <a href="symptoms.add?edit&id=<?php echo encrypt($view['id_symptoms']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
           <a href="#" data-target="#symptoms-<?php echo $view['id_symptoms']; ?>" data-toggle="modal" title="Hapus" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

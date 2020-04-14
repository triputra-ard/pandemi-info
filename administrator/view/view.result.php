<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nomor Hasil</th>
      <th class="bg-info">Hasil</th>
      <th class="bg-warning">Deskripsi Hasil</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.result`";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {

       ?>
       <tr>
         <td><?php echo $view['id_result']; ?> </td>
         <td><?php echo $view['result_name']; ?></td>
         <td><?php echo $view['result_description']; ?></td>
         <td>
           <a href="?edit&id=<?php echo encrypt($view['id_result']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
           <a href="#" data-target="#result-<?php echo $view['id_result']; ?>" data-toggle="modal" title="Hapus" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

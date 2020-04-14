<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>ID Pasien</th>
      <th class="bg-info">Email</th>
      <th class="bg-warning">Hasil</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.patient` a
      Left join `pandemi.result` b On a.result_code = b.id_result";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {

       ?>
       <tr>
         <td><?php echo $view['id_patient']; ?> </td>
         <td><?php echo $view['email']; ?></td>
         <td><?php echo $view['result_name']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>

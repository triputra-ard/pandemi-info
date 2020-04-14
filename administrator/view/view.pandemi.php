<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nama Pandemi</th>
      <th class="bg-info text-white">Jumlah Kasus</th>
      <th class="bg-warning text-white">Kasus Positif</th>
      <th class="bg-danger text-white">Kasus Meninggal</th>
      <th class="bg-success text-white">Kasus Sembuh</th>
      <th>Diperbarui</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.info`";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $positive = $view['all_case']-$view['death_case']-$view['cured_case'];
        $current_time = $view['info_time'];
        $replace_time = strtotime($current_time);
        $date = date("D, d-M-Y", $replace_time);
        $time = date("H:i",$replace_time);
       ?>
       <tr>
         <td><?php echo $view['id_pandemi']; ?> </td>
         <td><?php echo $view['all_case']; ?></td>
         <td><?php echo $positive; ?></td>
         <td><?php echo $view['death_case']; ?></td>
         <td><?php echo $view['cured_case']; ?></td>
         <td><?php echo $date; ?><br> Jam : <?php echo $time; ?></td>
         <td>
           <a href="pandemi.edit?id=<?php echo encrypt($view['id_pandemi']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
           <a href="#" data-target="#<?php echo $view['id_pandemi']; ?>" data-toggle="modal" title="Hapus" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

<div class="table-responsive">
  <table id="table_admin" class="table table-bordered">
    <thead>
      <th>Nomor Provinsi</th>
      <th>Nama Provinsi</th>
      <th>Situs Web</th>
      <th>Diperbarui</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * From `pandemi.localinfo` a
      JOIN `pandemi.admin` b ON a.created = b.id_admin";
      $query = mysqli_query($db,$sql);

      while ($view = mysqli_fetch_assoc($query)) {
        $current_time = $view['created_time'];
        $replace_time = strtotime($current_time);
        $date = date("D, d-M-Y", $replace_time);
        $time = date("H:i",$replace_time);
       ?>
       <tr>
         <td><?php echo $view['id_province']; ?></td>
         <td><?php echo $view['province_name']; ?></td>
         <td><a href="<?php echo $view['website']; ?>"><?php echo $view['website']; ?></a> </td>
         <td>Oleh : <?php echo $view['fullname']; ?> <br> <?php echo $date; ?><br> Jam : <?php echo $time; ?></td>
         <td>
           <a href="emergency.edit?id=<?php echo encrypt($view['id_province']); ?>" title="Edit" class="btn btn-rounded btn-success"><i class="fas fa-edit"></i> </a>
         </td>
       </tr>
       <?php include 'model/modal.askdelete.php'; ?>
     <?php } ?>
    </tbody>
  </table>
</div>

<?php
$id = decrypt($_GET['id']);

$sql = "SELECT * FROM `pandemi.result` WHERE id_result = '$id'";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.result" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Hasil Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_result']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Hasil</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="result" placeholder="Masukkan info hasil" value="<?php echo $view['result_name']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Deskripsi</label>
    </div>
    <div class="col-xl-6">
      <textarea name="description" id="summernote"><?php echo $view['result_description']; ?></textarea>
    </div>
  </div>

  <button type="submit" name="edit_result" class="btn btn-block btn-primary"><i class="fas fa-edit"></i> Perbarui</button>
</form>
<?php } ?>

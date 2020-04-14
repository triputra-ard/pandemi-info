<?php
$id = decrypt($_GET['id']);

$sql = "SELECT * FROM `pandemi.question` WHERE id_question = '$id'";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.question" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Pertanyaan Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_question']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Deskripsi</label>
    </div>
    <div class="col-xl-6">
      <textarea name="question" id="summernote"><?php echo $view['patient_symptoms']; ?></textarea>
    </div>
  </div>

  <button type="submit" name="edit_question" class="btn btn-block btn-primary"><i class="fas fa-edit"></i> Perbarui</button>
</form>
<?php } ?>

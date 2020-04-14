<?php
$id = decrypt($_GET['id']);

$sql = "SELECT * FROM `pandemi.symptoms` WHERE id_symptoms = '$id'";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.symptoms" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Hasil Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_symptoms']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Hasil</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="symptoms" placeholder="Masukkan gejala" value="<?php echo $view['symptoms']; ?>">
    </div>
  </div>

  <button type="submit" name="edit_symptoms" class="btn btn-block btn-primary"><i class="fas fa-edit"></i> Perbarui</button>
</form>
<?php } ?>

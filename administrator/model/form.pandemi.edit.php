<?php
$id = decrypt($_GET['id']);

$sql = "SELECT * FROM `pandemi.info` WHERE id_pandemi = '$id'";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.pandemi" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nama Pandemi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_pandemi']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-info">
      <label class="text-white">Jumlah Kasus</label>
    </div>
    <div class="col-xl-3">
      <input class="form-control" required="" type="number" name="all_case" onkeypress="return OnlyNumber(event)" value="<?php echo $view['all_case']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-danger">
      <label class="text-white">Jumlah Pasien Meninggal</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="death_case" onkeypress="return OnlyNumber(event)"  value="<?php echo $view['death_case']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-success">
      <label class="text-white">Jumlah Pasien Sembuh</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="cured_case"  onkeypress="return OnlyNumber(event)"  value="<?php echo $view['cured_case']; ?>">
    </div>
  </div>

  <button type="submit" name="edit" class="btn btn-block btn-success"><i class="fas fa-edit"></i> Perbarui Informasi Pandemi</button>
</form>
<?php }?>

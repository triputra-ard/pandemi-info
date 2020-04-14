<?php
$id = decrypt($_GET['id']);

$sql = "SELECT * From `pandemi.localinfo` WHERE id_province = '$id'";
$query = mysqli_query($db,$sql);
while ($view = mysqli_fetch_assoc($query)) {
 ?>
<form id="form" action="control/script.province" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor provinsi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo $view['id_province']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nama Provinsi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="province" placeholder="Masukkan nama provinsi" onkeypress="return OnlyAlphabetic(event)" value="<?php echo $view['province_name']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Situs Web</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="url" name="website" placeholder="Masukkan situs web penanganan pandemi" value="<?php echo $view['website'] ?>">
      <input type="text" hidden name="id_admin" value="<?php echo @$_SESSION['id_admin']; ?>">
    </div>
  </div>

  <button type="submit" name="edit" class="btn btn-block btn-success"><i class="fas fa-edit"></i> Diperbarui Informasi Lokal</button>
</form>
<?php } ?>

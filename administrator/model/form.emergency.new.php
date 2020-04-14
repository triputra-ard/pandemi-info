<form id="form" action="control/script.province" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor provinsi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo autokode("`pandemi.localinfo`",""); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nama Provinsi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="province" placeholder="Masukkan nama provinsi" onkeypress="return OnlyAlphabetic(event)">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Situs Web</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="url" name="website" placeholder="Masukkan situs web penanganan pandemi">
      <input type="text" hidden name="id_admin" value="<?php echo @$_SESSION['id_admin']; ?>">
    </div>
  </div>

  <button type="submit" name="new" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan Informasi Lokal</button>
</form>

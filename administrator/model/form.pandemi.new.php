<form id="form" action="control/script.pandemi" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nama Pandemi</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" placeholder="Masukkan nama pandemi">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-info">
      <label class="text-white">Jumlah Kasus</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="all_case" onkeypress="return OnlyNumber(event)" placeholder="Masukkan semua kasus">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-danger">
      <label class="text-white">Jumlah Pasien Meninggal</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="death_case" onkeypress="return OnlyNumber(event)" placeholder="Masukkan jumlah pasien meninggal">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3 bg-success">
      <label class="text-white">Jumlah Pasien Sembuh</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="number" name="cured_case" onkeypress="return OnlyNumber(event)" placeholder="Masukkan jumlah pasien sembuh">
    </div>
  </div>

  <button type="submit" name="new" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan Informasi Pandemi</button>
</form>

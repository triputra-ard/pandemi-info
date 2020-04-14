<form id="form" action="control/script.symptoms" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Hasil Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo autokode("`pandemi.symptoms`","G-"); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Hasil</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="symptoms" placeholder="Masukkan gejala">
    </div>
  </div>

  <button type="submit" name="new_symptoms" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
</form>

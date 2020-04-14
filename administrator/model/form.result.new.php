<form id="form" action="control/script.result" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Hasil Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo autokode("`pandemi.result`","R-"); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Hasil</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="result" placeholder="Masukkan info hasil">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Deskripsi</label>
    </div>
    <div class="col-xl-6">
      <textarea name="description" id="summernote"></textarea>
    </div>
  </div>

  <button type="submit" name="new_result" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
</form>

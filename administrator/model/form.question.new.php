<form id="form" action="control/script.question" method="post">
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Nomor Pertanyaan Diagnosa</label>
    </div>
    <div class="col-xl-4">
      <input class="form-control" required="" type="text" name="id" readonly value="<?php echo autokode("`pandemi.question`","P-"); ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xl-3">
      <label class="text-white">Deskripsi</label>
    </div>
    <div class="col-xl-6">
      <textarea name="question" id="summernote"></textarea>
    </div>
  </div>

  <button type="submit" name="new_question" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
</form>

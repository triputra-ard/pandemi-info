<?php
if (!empty($_GET['query'])) {
  // code...
  if ($_GET['query'] == "success") {
    echo '<div class="alert alert-info alert-on-fixed animated slideInRight alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">X</button>
      <p><i class="fas fa-plus"></i> Ditambahkan </p>
    </div>';
  }elseif ($_GET['query'] == "updated") {
    echo '<div class="alert alert-success alert-on-fixed animated slideInRight alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <p><i class="fas fa-edit"></i> Diperbarui </p>
    </div>';
  }elseif ($_GET['query'] == "notmatchquerry") {
    echo '<div class="alert alert-danger alert-on-fixed animated slideInRight alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <p><i class="fas fa-exclamation-triangle"></i> Tidak terhubung  <i class="fas fa-exclamation-triangle"></i></p>
    </div>';
  }elseif ($_GET['query'] == "updatedstatus") {
    echo '<div class="alert alert-success alert-on-fixed animated fadeInDown alert-dismissible position-alert">
      <button type="button" class="close" data-dismiss="alert">X</button>
      <p><i class="fas fa-edit"></i> Status berhasil diubah <i class="fas fa-check"></i></p>
    </div>';
  }elseif ($_GET['query'] == "delete") {
    echo '<div class="alert alert-danger alert-on-fixed animated fadeInDown alert-dismissible position-alert">
      <button type="button" class="close" data-dismiss="alert">X</button>
      <p><i class="fas fa-trash"></i> Dihapus </p>
    </div>';
  }

}


 ?>

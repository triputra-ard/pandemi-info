<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new'])) {

  $pandemic = $_POST['id'];
  $allcase = $_POST['all_case'];
  $deathcase = $_POST['death_case'];
  $curedcase = $_POST['cured_case'];
  $currentdate = date("Y-m-d H:i:s");

  $check = mysqli_query($db, "SELECT * FROM `pandemi.info` WHERE id_pandemi = '$pandemic'");
    if (mysqli_num_rows($check) > 0) {
      echo "<script>alert('Pandemi sudah ada !'); window.history.back();</script>";
    }else {
      $sql = "INSERT into `pandemi.info` VALUES('$pandemic','$allcase','$deathcase','$curedcase','$currentdate')";
      $query = mysqli_query($db,$sql);

      if ($query) {
      header('location:../pandemi.view?query=success');
      }else {
      header('location:../pandemi.add?query=notmatchquerry');
      }
    }
}elseif (isset($_POST['edit'])) {

  $pandemic = $_POST['id'];
  $allcase = $_POST['all_case'];
  $deathcase = $_POST['death_case'];
  $curedcase = $_POST['cured_case'];
  $currentdate = date("Y-m-d H:i:s");

  $sql = "UPDATE `pandemi.info` SET
  all_case='$allcase',
  death_case='$deathcase',
  cured_case='$curedcase',
  info_time='$currentdate' WHERE id_pandemi = '$pandemic'";
  $query = mysqli_query($db,$sql);

  if ($query) {
  header('location:../pandemi.view?query=updated');
  }else {
  header('location:../pandemi.view?query=notmatchquerry');
  }
}elseif (isset($_GET['delete'])) {
  $pandemi = decrypt($_GET['id']);

  $sql = "DELETE from `pandemi.info` WHERE id_pandemi = '$pandemi'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../pandemi.view?query=delete');
    }else {
    header('location:../pandemi.view?query=notmatchquerry');
    }
}
?>

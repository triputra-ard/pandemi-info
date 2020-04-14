<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new'])) {

  $number = $_POST['id'];
  $province = $_POST['province'];
  $website = $_POST['website'];
  $id = $_POST['id_admin'];

  $currentdate = date("Y-m-d H:i:s");

  $sql = "INSERT into `pandemi.localinfo` VALUES(
    '$number',
    '$province',
    '$website',
    '$id','$currentdate')";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../emergency.view?query=success');
    }else {
    header('location:../emergency.add?query=notmatchquerry');
    }
}elseif (isset($_POST['edit'])) {
  $number = $_POST['id'];
  $province = $_POST['province'];
  $website = $_POST['website'];
  $id = $_POST['id_admin'];

  $currentdate = date("Y-m-d H:i:s");
  $sql = "UPDATE `pandemi.localinfo` SET
    province_name ='$province',
    website = '$website',
    created = '$id',
    created_time = '$currentdate' WHERE id_province = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../emergency.view?query=updated');
    }else {
    header('location:../emergency.view?query=notmatchquerry');
    }
}
?>

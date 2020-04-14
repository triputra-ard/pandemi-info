<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new_result'])) {

  $number = $_POST['id'];
  $result = $_POST['result'];
  $description = $_POST['description'];

  $sql = "INSERT into `pandemi.result` VALUES(
    '$number', '$result','$description')";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../result.add?query=success#view');
    }else {
    header('location:../result.add?query=notmatchquerry#forms');
    }
}elseif (isset($_POST['edit_result'])) {
  $number = $_POST['id'];
  $result = $_POST['result'];
  $description = $_POST['description'];

  $sql = "UPDATE `pandemi.result` SET
    result_name ='$result',
    result_description = '$description'
     WHERE id_result = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../result.add?query=success#view');
    }else {
    header('location:../result.add?query=notmatchquerry#forms');
    }
}elseif (isset($_GET['delete'])) {
  $number = decrypt($_GET['id']);

  $sql = "DELETE from `pandemi.result` WHERE id_result = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../result.add?query=delete#view');
    }else {
    header('location:../result.add?query=notmatchquerry#forms');
    }
}
?>

<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new_symptoms'])) {

  $number = $_POST['id'];
  $symptoms = $_POST['symptoms'];

  $sql = "INSERT into `pandemi.symptoms` VALUES(
    '$number', '$symptoms')";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../symptoms.add?query=success#view');
    }else {
    header('location:../symptoms.add?query=notmatchquerry#forms');
    }
}elseif (isset($_POST['edit_symptoms'])) {
  $number = $_POST['id'];
  $symptoms = $_POST['symptoms'];

  $sql = "UPDATE `pandemi.symptoms` SET
    symptoms ='$symptoms' WHERE id_symptoms = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../symptoms.add?query=success#view');
    }else {
    header('location:../symptoms.add?query=notmatchquerry#forms');
    }
}elseif (isset($_GET['delete'])) {
  $number = decrypt($_GET['id']);

  $sql = "DELETE from `pandemi.symptoms` WHERE id_symptoms = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../symptoms.add?query=delete#view');
    }else {
    header('location:../symptoms.add?query=notmatchquerry#forms');
    }
}
?>

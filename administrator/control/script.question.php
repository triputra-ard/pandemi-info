<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new_question'])) {

  $number = $_POST['id'];
  $question = $_POST['question'];

  $sql = "INSERT into `pandemi.question` VALUES(
    '$number', '$question')";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../question.add?query=success#view');
    }else {
    header('location:../question.add?query=notmatchquerry#forms');
    }
}elseif (isset($_POST['edit_question'])) {
  $number = $_POST['id'];
  $question = $_POST['question'];

  $sql = "UPDATE `pandemi.question` SET
    patient_symptoms ='$question' WHERE id_question = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../question.add?query=success#view');
    }else {
    header('location:../question.add?query=notmatchquerry#forms');
    }
}elseif (isset($_GET['delete'])) {
  $number = decrypt($_GET['id']);

  $sql = "DELETE from `pandemi.question` WHERE id_question = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../question.add?query=delete#view');
    }else {
    header('location:../question.add?query=notmatchquerry#forms');
    }
}
?>

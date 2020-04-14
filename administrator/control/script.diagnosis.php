<?php
include '../../database/connection.php';
include '../../function/function-by-tri.php';
if (isset($_POST['new'])) {

  $number = $_POST['id'];
  $symptoms = $_POST['symptoms'];
  $diagnosis = $_POST['diagnosis'];
  $say_yes = $_POST['is_yes'];
  $say_no = $_POST['is_no'];
  $start = $_POST['is_start'];
  $end = $_POST['is_end'];

  $sql = "INSERT into `pandemi.diagnosis`
    VALUES(
    '$number',
    '$symptoms','$diagnosis',
    '$say_yes','$say_no',
    '$start','$end'
    )";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../diagnosis.view?query=success#view');
    }else {
    header('location:../diagnosis.view?query=notmatchquerry#forms');
    }
}elseif (isset($_POST['edit'])) {
  $number = $_POST['id'];
  $symptoms = $_POST['symptoms'];
  $diagnosis = $_POST['diagnosis'];
  $say_yes = $_POST['is_yes'];
  $say_no = $_POST['is_no'];
  $start = $_POST['is_start'];
  $end = $_POST['is_end'];

  $sql = "UPDATE `pandemi.diagnosis` SET
    diagnosis_symptoms ='$symptoms',
    diagnosis_patient = '$diagnosis',
    diagnosis_yes = '$say_yes',
    diagnosis_no = '$say_no',
    is_start = '$start',
    is_end = '$end'
     WHERE id_diagnosis = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../diagnosis.view?query=updated#view');
    }else {
    header('location:../diagnosis.view?query=notmatchquerry#forms');
  }
}elseif (isset($_GET['delete'])) {
  $number = decrypt($_GET['id']);

  $sql = "DELETE from `pandemi.diagnosis` WHERE id_diagnosis = '$number'";
    $query = mysqli_query($db,$sql);

    if ($query) {
    header('location:../diagnosis.view?query=delete#view');
    }else {
    header('location:../diagnosis.view?query=notmatchquerry#forms');
  }
}
?>

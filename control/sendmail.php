<?php
include '../function/function-by-tri.php';
require_once '../function/function-mail-tri.php';
require_once '../database/connection.php';
if (isset($_POST['new'])) {

  $number = decrypt($_POST['id']);
  $result = decrypt($_POST['result']);
  $email = $_POST['mail'];

  $sql = "INSERT into `pandemi.patient` VALUES('$number','$email','$result')";
  $query = mysqli_query($db, $sql);

  $sqlview = mysqli_query($db, "SELECT * FROM `pandemi.result` Where id_result = '$result'");
  $view = mysqli_fetch_assoc($sqlview);

  $resultview =  $view['result_name'];
  $resultdesc = $view['result_description'];

  $mail->addAddress($email, $email);
  $mail->Subject = 'Pandemi-Info [Hasil Diagnosa]';
  $message = "Hasil diagnosa anda : <br> <b>$resultview</b>
  <br> $resultdesc
  <br> Harap diketahui diagnosa ini bukan merupakan diagnosa dokter. Mohon hubungi petugas medis atau dokter anda untuk penanganan lebih lanjut.
  <br>Terimakasih, beri saya peringkat untuk aplikasi saya <a href='https://bit.ly/2R7tm0D'>https://bit.ly/2R7tm0D</a>
  <br>Mohon jangan membalas email ini.
  <br>
  <br>Semoga lekas sembuh,
  <br>
  <br>Tri.
  ";
  $mail->Body = $message;
  $mail->setFrom('smile.trie@gmail.com', 'Creator Pandemi-Info');
  $mail->addReplyTo('smile.trie@gmail.com', 'ADMIN');
  $mail->AddCC("no-reply@pandemi.com", "ADMIN");
  $mail->isHTML(true);
  $mail->send();

  if ($query) {
    header('location:../page.send');
  }else {
    echo "<script>
    alert('Sesuatu yang galat terjadi');
    window.history.back();</script>";
  }
}
 ?>

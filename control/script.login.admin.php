<?php
include '../database/connection.php';
include '../function/pagelink.php';

if (isset($_POST['admin'])) {
  $username = $_POST['user'];
  $password = $_POST['password'];

  $sql =  "SELECT * FROM `pandemi.admin` WHERE username = '$username' AND password = '$password'";
  $query = mysqli_query($db,$sql) or die (mysqli_error($db));
  $fetch = mysqli_fetch_assoc($query);
  if (mysqli_num_rows($query)>0)
  {
    session_start();
    $_SESSION['id_admin'] = $fetch['id_admin'];
    $_SESSION['admin_name'] = $fetch['fullname'];
    $_SESSION['admin_username'] = $fetch['username'];
    $_SESSION['admin_password'] = $fetch['password'];

    header('location:'.$adminhome);
  }else {
    echo "<script> alert('Oh kami tidak mengenal anda. cek username dan password');
    window.history.back();</script>";
    }
  }
 ?>

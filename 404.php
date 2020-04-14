<!DOCTYPE html>
<?php
require_once 'function/pagelink.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tri">
    <title>PANDEMI INFO [INDONESIA] <?php echo $titlePage; ?></title>
    <!-- Bootstrap CORE -->
    <link rel="stylesheet" href="<?php echo $interface; ?>bootstrap/css/bootstrap.min.css">

    <!-- Addtional plugin -->
    <link rel="stylesheet" href="<?php echo $interface; ?>font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $interface; ?>animate/animate.min.css">
    <link href="<?php echo $interface; ?>fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $interface; ?>css/footer-clean.css">

    <!-- Style Plugin -->
    <link rel="stylesheet" href="<?php echo $interface; ?>libs/css/style.css">
    <link rel="stylesheet" href="<?php echo $interface; ?>style-by-tri.css">

    <!--Scrolling NAV -->
    <link rel="stylesheet" href="<?php echo $interface; ?>scrolling-nav.css">

    <!-- AOS -->
    <link rel="stylesheet" href="<?php echo $interface; ?>aos.css">
  </head>
  <body class="gray">
    <div class="page-wrapper">
      <div class="container">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h1 class="text-center display-1 animated flash infinite d-none d-sm-none d-md-none d-xl-block d-lg-block">4 0 4 : Not Found</h1>
              <h4 class="text-center display-1 animated flash infinite d-block d-sm-block d-md-block d-xl-none d-lg-none">4 0 4 <small>Not Found</small></h4>
              <br>
              <h3 class="text-center">Oh.. Sepertinya halaman tidak ada <a class="text-danger" href="#" onclick="Return()">&larr; Bawa saya kembali</a></h3>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Optional JavaScript -->
  <script src="<?php echo $interface; ?>jquery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo $interface; ?>bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php echo $interface; ?>slimscroll/jquery.slimscroll.js"></script>
  <script src="<?php echo $interface; ?>libs/js/main-js.js"></script>
  <!-- Optional Plugin -->
  <script src="<?php echo $interface; ?>parsley/parsley.js"></script>
  <script src="<?php echo $interface; ?>function-tri.js"></script>
  <!--Scrolling NAV -->
  <script src="<?php echo $interface; ?>scrolling-nav.js"></script>
  <!--AOS JS-->
  <script src="<?php echo $interface; ?>aos.js"></script>

  <script src="<?php echo $interface; ?>external-tri.js"></script>
  <script src="<?php echo $interface; ?>external-tri-form.js"> </script>
  <script src="<?php echo $interface; ?>external-tri-event.js"> </script>
  <script>
  function Return(){
    window.history.back();
  }
  </script>
  </body>
  </html>

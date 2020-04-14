<?php
include 'header.php';
 ?>
<body class="fully-background" style="font-family:'Segoe UI';">
 <!-- Desktop View Nav -->
 <nav class="navbar navbar-dark navbar-expand-sm fixed-top navbar-transparent-noborder d-none d-sm-none d-md-block d-lg-block d-xl-block">
   <div class="container">
  <h3 class="navbar-brand">PANDEMI-INFO</h3>
  <!-- Desktop View -->
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item"><a href="<?php echo $home; ?>" class="btn text-white <?php if($currentpage == "home") echo "btn-primary active";?>"><i class="fas fa-home"></i> Beranda</a></li>
      <li class="nav-item"><a href="<?php echo $diagnose; ?>" class="btn text-white <?php if($currentpage == "diagnosis") echo "btn-primary active";?>"><i class="fas fa-stethoscope"></i> Diagnosa</a></li>
      <li class="nav-item"><a href="<?php echo $info; ?>" class="btn text-white <?php if($currentpage == "info") echo "btn-primary active";?>"><i class="fas fa-ambulance"></i> Informasi Darurat</a></li>
    </ul>
    <span class="navbar-text ml-auto d-block d-sm-none d-xl-block">
        <a class="btn btn-rounded btn-outline-secondary" href="<?php echo $linkIG; ?>"><i class="fab fa-instagram" style="font-size:26px;"></i></a>&nbsp;
        <a class="btn btn-rounded btn-outline-info" href="<?php echo $linkTwitter ?>"><i class="fab fa-twitter" style="font-size:26px;"></i></a>
    </span>
  </div>
</div>
</nav>
 <!-- Mobile View -->
 <nav class="navbar navbar-dark navbar-expand-sm fixed-top bg-success d-block d-md-none d-xl-none">
   <div class="container">
     <button class="navbar-toggler toggler-default collapsed" data-toggle="collapse" data-target="#navcol-1">
       <span class="icon-bar-top top-bar"></span>
       <span class="icon-bar-middle middle-bar"></span>
       <span class="icon-bar-bottom bottom-bar"></span>
     </button>
  <h3 class="navbar-brand">PANDEMI-INFO</h3>
  <!-- Desktop View -->
  <div class="collapse navbar-collapse" id="navcol-1">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item"><a href="<?php echo $home; ?>" class="btn text-white <?php if($currentpage == "home") echo "btn-primary active";?>"><i class="fas fa-home"></i> Beranda</a></li>
      <li class="nav-item"><a href="<?php echo $diagnose; ?>" class="btn text-white <?php if($currentpage == "diagnosis") echo "btn-primary active";?>"><i class="fas fa-stethoscope"></i> Diagnosa</a></li>
      <li class="nav-item"><a href="<?php echo $info; ?>" class="btn text-white <?php if($currentpage == "info") echo "btn-primary active";?>"><i class="fas fa-ambulance"></i> Informasi Darurat</a></li>
    </ul>
    <span class="navbar-text ml-auto d-block d-sm-none d-xl-block">
        <a class="btn btn-rounded btn-outline-secondary" href="<?php echo $linkIG; ?>"><i class="fab fa-instagram" style="font-size:26px;"></i></a>&nbsp;
        <a class="btn btn-rounded btn-outline-info" href="<?php echo $linkTwitter ?>"><i class="fab fa-twitter" style="font-size:26px;"></i></a>
    </span>
  </div>
</div>
</nav>
<br>

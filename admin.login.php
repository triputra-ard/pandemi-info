<?php
$titlePage = "ZONA ADMIN";
require_once 'includes/header.php'; ?>

<body class="fully-background">
  <br><br><br><br><br><br>
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="col-xl-4 offset-xl-4">
        <div class="card transparent-white">
          <div class="card-body">
            <h2 class="text-center text-dark">ZONA ADMIN</h2>
          </div>
        </div>
      </div>
      <div class="col-xl-4 offset-xl-4">
        <div class="card transparent-white">
          <div class="card-body">
            <?php include 'model/form.login.admin.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include 'includes/footer.php'; ?>

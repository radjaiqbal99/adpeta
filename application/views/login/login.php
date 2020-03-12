<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="<?php echo base_url() ?>">
  <title>ADPETA | Login</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="assets/css/stylen.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="assets/login_asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="assets/login_asset/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="" style="background-image: url('assets/image/itenas-gdg.jpg'); opacity: 0.9; background-size: 100% 100%; background-attachment: fixed; background-repeat: no-repeat;">
  <div class="container">
    <!-- Outer Row -->
    <div class="row login">
      <div class="col-12 col-sm-4 col-md-7 col-lg-5 col-xl-4 ">
        <div class=" card ">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-4">
                  <!-- <div class="rounded mx-auto text-center mb-5 text-primary">
                    <img src="assets/image/itenas.png" width="50%" heigt="auto"> 
                    <i class="nav-icon  fas fa-4x fa-sign-in-alt"></i>
                    </div> -->
                  <div class="text-center text-primary">
                    <h1 style="font-family: 'Work Sans', sans-serif; font-size:18px" class="h3 text-primary  mb-4">WELCOME</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method="POST" action="<?= base_url('login') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submite" class="btn btn-primary btn-user btn-block">
                      Login
                    </button <div class="text-center small mt-3">
                    <div class="forgot mt-5">
                      <a href="forgot-password.html" class="button blue">Forgot Password?</a>
                    </div>
                    <!-- <a style="text-align: center;" href="forgot-password.html">Forgot Password?</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/login_asset/vendor/jquery/jquery.min.js"></script>
  <script src="assets/login_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assets/login_asset/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="assets/login_asset/js/sb-admin-2.min.js"></script>
</body>

</html>
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
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <link href="assets/login_asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="assets/login_asset/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body  class="" style=" opacity: 0.9; filter: blur(0); -webkit-filter: blur(0px); ">

  <div class="jumbotron jumbotron-fluid mb-0 pb-0">
  <div class="container " style="">
    <div class="row content" >
      <div class="col-lg-6 petunjuk " style="">
        <h2 data-aos="fade-up" data-aos-duration="1500"class="display-4">Administrasi KP & TA</h2>
        <p data-aos="fade-up" data-aos-duration="1800"class="lead">Silahkan login terlebih dahulu untuk dapat
            mengakses halaman selanjutnya, pastikan Anda
            telah membaca petunjuk penggunaan.</p>
        <a href="Panduan.php"><button data-aos="fade-up" data-aos-duration="2000" class="btn btn-info">Petunjuk</button></a>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">  
          <div data-aos="fade-down" data-aos-duration="2000" class="container box-login shadow ">
            
            <h2 class="display-4 text-info">WELCOME</h2>
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
              <button type="submite" class="btn btn-info btn-user btn-block">
                Login
              </button <div class="text-center small mt-3">
              <div class="forgot form-group mt-5">
                <a href="forgot-password.html" class="button blue">Forgot Password?</a>
              </div>
              <!-- <a style="text-align: center;" href="forgot-password.html">Forgot Password?</a> -->
            </form>
              <!-- <p>Copyright&copy;2019 <a href="https://lukmanahromi.000webhostapp.com">Lukman</a> & <a href="https://api.whatsapp.com/send?phone=6282294289765&text=Hallo%20">Iqbal</a></p>        -->
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

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
<script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>
</body>

</html>
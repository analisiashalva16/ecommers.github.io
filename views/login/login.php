<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/vendors/metro4/css/metro-all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/index.css">
  <title>Document</title>
</head>
<body>
  

<!-- CSS LOGIN -->
<link rel="stylesheet" href="assets/css/styleLogin.css">
<title><?= $data['title']; ?></title>
<main class="form-signin w-100 m-auto">
    <form action="<?= $base_url;?>c_login/Send" method="POST">
      <img class="mb-4 rounded-circle" src="assets/img/bbm.jpg" alt="" width="78" height="62">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <?php 
      if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "belum_login"){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Anda Harus Login terlebih dahulu!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }else  if($_GET['pesan'] == "gagal"){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Email dan Password Anda Salah!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }else  if($_GET['pesan'] == "logout"){
    echo "<div class='alert alert-succes alert-dismissible fade show' role='alert'>
    Anda berhasil logout
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
      }
      ?>

      <div class="form-floating">
        <input type="email" name ="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email </label>
      </div>
      <div class="form-floating">
        <input type="password" name ="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </form>
  </main>
  </body>
</html>
<script src="<?= $base_url ?>/assets/vendors/jquery/jquery-3.4.1.min.js"></script>
<script src="<?= $base_url ?>/assets/vendors/chartjs/Chart.bundle.min.js"></script>
<script src="<?= $base_url ?>/assets/vendors/qrcode/qrcode.min.js"></script>
<script src="<?= $base_url ?>/assets/vendors/jsbarcode/JsBarcode.all.min.js"></script>
<script src="<?= $base_url ?>/assets/vendors/ckeditor/ckeditor.js"></script>
<script src="<?= $base_url ?>/assets/vendors/metro4/js/metro.min.js"></script>
<script src="<?= $base_url ?>/assets/js/index.js"></script>
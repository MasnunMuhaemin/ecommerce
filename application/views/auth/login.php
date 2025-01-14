<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url("login") ?>" class="h1"><b>Wardani </b>Collection</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Masuk</p>
      <p><?= $this->session->flashdata('errActLogin'); ?></p>

      <form action="<?= base_url('actLogin') ?>" method="post" class="mb-3">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0 text-center">
        <a href="<?= base_url("register") ?>">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url("assets/admin/") ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/admin/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/admin/") ?>dist/js/adminlte.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plantilla/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Sayge</b>Perú</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión</p>
      <?php if ($intentos > 1) { ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-ban"></i> Atención!</h5>
            Los datos ingresados son incorrectos.
        </div>
      <?php }?>
      <form action="<?= site_url() ?>user/iniciar-sesion" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="user" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-rigth">
            <button type="submit" class="btn btn-primary btn-block">Inicia Sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= site_url() ?>assets/plantilla/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= site_url() ?>assets/plantilla/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= site_url() ?>assets/plantilla/adminlte.min.js"></script>
</body>
</html>

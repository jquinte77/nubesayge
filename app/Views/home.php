<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sayge Perú | Factuarción Electronica</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plantilla/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<!-- /wrapper -->
<div class="wrapper">
  <?= $this->renderSection('navbar') ?>
  <?= $this->renderSection('aside') ?>
  <?= $this->renderSection('content') ?>
  <?= $this->renderSection('footer') ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= site_url() ?>assets/plantilla/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= site_url() ?>assets/plantilla/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= site_url() ?>assets/plantilla/adminlte.js"></script>

</body>
</html>

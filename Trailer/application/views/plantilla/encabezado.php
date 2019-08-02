<?php
$base = base_url('base');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trailer Dom</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheet.css">

  <!-- Bootstrap core CSS -->
  <link href="<?= $base; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template
  <link href="<?= $base; ?>/css/the-big-picture.css" rel="stylesheet"> -->
</head>

<body >
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Trailer Dom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('main/index'); ?>"><i class="fa fa-fw fa-home"> </i> Inicio
              </a>
            </li>
            <li class="nav-item">
              <?php
              $urlagregar = base_url('main/agregar');
              if (isset($_SESSION['nombre'])) {
                echo <<<W
                <a class="nav-link" href="{$urlagregar}"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Pelicula</a>
W;
              } ?>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('main/trailer'); ?>"><i class="fa fa-youtube-play"></i> Trailer
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('main/contacto');  ?>"><i class="fa fa-fw fa-envelope"></i> Contacto</a>
            </li>
            <li class="nav-item">
              <?php
              $urlcerrar = base_url('main/cerrar');
              $urlabrir = base_url('main/login');
              if (isset($_SESSION['nombre'])) {
                echo <<<W
                <a class="nav-link" href="{$urlcerrar}" style="color:red">Cerrar Sesión</a>
W;
              }?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

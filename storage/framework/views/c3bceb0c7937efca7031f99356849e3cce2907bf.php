<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href=<?php echo e(asset("../../favicon.ico")); ?> />

  <title><?php echo $__env->yieldContent('jd'); ?></title>

  <!-- Css font -->
  <link rel="stylesheet" href=<?php echo e(asset("style.css")); ?>>

  <!-- Bootstrap core CSS -->
  <link href= <?php echo e(asset("css/bootstrap.min.css")); ?> rel="stylesheet" />

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href=<?php echo e(asset("external/ie10-viewport-bug-workaround.css")); ?> rel="stylesheet" />

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9
      ]><script src="../../asset/js/ie8-responsive-file-warning.js"></script
    ><![endif]-->
    <script src=<?php echo e(asset("external/ie-emulation-modes-warning.js")); ?>></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Custom styles for this template -->
  <link href=<?php echo e(asset("carousel.css")); ?> rel="stylesheet" />
</head>
<!-- NAVBAR
================================================== -->

<body>
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <img class="navbar-brand img-circle" src=<?php echo e(asset("Img/logo/logo.png")); ?> width="55"; height="55";>
            <a class="navbar-brand" href="#">
              Bali Pasadena
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href=<?php echo e(url('/index')); ?>>Beranda</a></li>
              <li><a href=<?php echo e(url('/product')); ?>>Produk Kami</a></li>
              <li><a href=<?php echo e(url('/contact')); ?>>Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
</div>
<div class="jumbotron">
    <?php echo $__env->yieldContent('main'); ?>
</div>
<script src=<?php echo e(asset("js/jquery-3.4.1.min.js")); ?>></script>
<script>
  window.jQuery ||
    document.write('<script src=<?php echo e(asset("js/jquery-3.4.1.min.js")); ?>></script>');
</script>
<script src=<?php echo e(asset("js/bootstrap.min.js")); ?>></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src=<?php echo e(asset("external/holder.min.js")); ?>></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=<?php echo e(asset("external/ie10-viewport-bug-workaround.js")); ?>></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\OJTl\OJT\resources\views/layouts/layouts.blade.php ENDPATH**/ ?>
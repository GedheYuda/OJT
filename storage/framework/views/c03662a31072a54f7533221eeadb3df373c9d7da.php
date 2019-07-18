<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="jual kerajinan rotan, meja rotan, kerajinan" />
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
    ><script src="../../asset/js/ie8-responsive-file-warning.js"></script
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
          <img class="navbar-brand img-circle" src=<?php echo e(asset("Img/logo/logo.png")); ?> style="width:55;height:55;">
            <a class="navbar-brand">
              Bali Pasadena
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href=<?php echo e(url('/')); ?>>Beranda</a></li>
                <li><a href="<?php echo e(url('/product')); ?>">Produk Kami</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="jumbotron">
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="<?php echo e(asset('img/icon/twoo.jpg')); ?>" alt="First slide" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="judul">Welcome to future furniture</h1>
                        <p class="atas">
                            Whatever you need is all available in front of you and providing all your home furniture needs.
                        </p>
                        <p class="home">Bali Pasadena</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="<?php echo e(url('/login')); ?>" role="button">Sign up today</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="<?php echo e(asset('img/icon/five.jpg')); ?>" alt="Second slide" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="judul">Anything for you.</h1>
                        <p class="atas">
                            With elegant and environmentally friendly materials, you can create a pleasant relaxing experience.
                        </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="<?php echo e(url('/contact')); ?>" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="<?php echo e(asset('img/icon/one.jpg')); ?>" alt="Third slide" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="judul">Made with special expertise.</h1>
                        <p class="atas">
                            Made by special craftsmen who are already skilled in their fields.
                        </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="<?php echo e(url('/product')); ?>" role="button">Browse gallery</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
</div>
<?php echo $__env->yieldContent('main'); ?>
</div>
<hr class="featurette-divider" />
<!-- /END THE FEATURETTES -->

<!-- FOOTER -->
<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>
        &copy; 2019 Bali_pasadena, Inc. &middot; <a href="#">Privacy</a> &middot;
        <a href="#">Terms</a>
    </p>
</footer>
  <!-- /.container -->
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
  <script>
      document.write('<script src="js/jquery-3.4.1.min.js"><\/script>');
  </script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="<?php echo e(asset('external/holder.js')); ?>"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="<?php echo e(asset('external/ie10-viewport-bug-workaround.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\OJT\resources\views/layouts/layouts.blade.php ENDPATH**/ ?>
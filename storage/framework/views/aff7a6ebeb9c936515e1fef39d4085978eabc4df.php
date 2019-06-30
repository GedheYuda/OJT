<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('jd'); ?></title>
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/global.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <link href= <?php echo e(asset("css/bootstrap.min.css")); ?> rel="stylesheet" />
    <link href="<?php echo e(asset('css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css/main1.css')); ?>" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" style="text-align: center;"><?php echo $__env->yieldContent('jd'); ?></h2>
                    <?php echo $__env->yieldContent('konten'); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\OJT\resources\views/layouts/layout.blade.php ENDPATH**/ ?>
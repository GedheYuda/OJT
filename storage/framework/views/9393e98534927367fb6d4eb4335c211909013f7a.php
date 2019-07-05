<?php $__env->startSection('jd'); ?>
Produk Kami
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<div class="container-fluid">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Catalog</h1>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active">Menu</li>
                <li class="list-group-item">
                    <a href="<?php echo e(url('/outdoor')); ?>">Outdoor</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo e(url('/indoor')); ?>">Indoor</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo e(url('/accesories')); ?>">Accesories</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
        <!-- Outdor Patio-set -->
        <?php $__currentLoopData = $product->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo e($prd->name); ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="<?php echo e(url('storage/images/',$prd->file)); ?>"
                                        alt="Generic placeholder image" class="featurette-image img-responsive center-block"
                                        data-src="holder.js/800x800/auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<hr class='featurette-divider' />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OJT\resources\views/balipasadena/produk.blade.php ENDPATH**/ ?>
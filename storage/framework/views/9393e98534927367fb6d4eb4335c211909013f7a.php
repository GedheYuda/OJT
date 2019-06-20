<?php $__env->startSection('jd'); ?>
Our Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<div class='container-fluid'>
    <div class='jumbotron'>
        <div class='row'>
            <div class='col-md-12'>
            <h1 class='text-center'>Our Products</h1>
        </div>
    </div>
</div>
<hr />
<!-- Outdor Patio-set-->
<?php $__currentLoopData = $product->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='row'>
        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo e($prd->name); ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo e(url('storage/images/',$prd->file)); ?>"
                                class="featurette-image img-responsive center-block"
                                data-src="holder.js/200x200/auto"
                                alt="Generic placeholder image" />
                            </div>
                            <div class="col-md-8">
                                <p class="text-left">
                                    <span class="label  label-default">Harga:</span>Rp<?php echo e($prd->price); ?>

                                </p>
                                <p class="text-left">
                                    <span class="label  label-default">Tipe :</span><?php echo e($prd->type); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<hr class='featurette-divider' />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OJT\resources\views/balipasadena/produk.blade.php ENDPATH**/ ?>
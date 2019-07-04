<?php $__env->startSection('jd'); ?>
Tambah Data Barang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<div class="card-body">
	<?php if($errors->any()): ?>
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
	<?php endif; ?>
</div>
<form method="POST" action="<?php echo e(URL::route('product.store')); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<div class="row row-space">
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="name">Nama Barang</label>
				<input class="input--style-4" type="text" name="name" id="name">
			</div>
		</div>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="price">Harga Barang</label>
				<input class="input--style-4" type="text" name="price" id="price">
			</div>
		</div>
	</div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="type">Tipe Barang</label>
            <select name="type" id="type" class="input--style-4">
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
                <option value="accesories">Accesories</option>
            </select>
        </div>
    </div>
    <div class="col-2">
        <div class="input-group">
            <label class="label" for="pic">Gambar Barang</label>
            <input class="input--style-4" type="file" name="pic" id="pic">
        </div>
    </div>
    <div class="col-4">
 	<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
 </div>
</div>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OJT\resources\views/balipasadena/create.blade.php ENDPATH**/ ?>
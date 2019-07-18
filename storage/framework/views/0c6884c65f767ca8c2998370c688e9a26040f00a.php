<?php $__env->startSection('jd'); ?>
Tambah Data Barang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<form method="POST" action="<?php echo e(url('/store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
	<div class="row row-space">
        <div class="col-4">
            <div class="text-center">
                <img src="" id="images" class="card-img-top" style="width: 50%; height: 50%;">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="name">Nama Barang</label>
				<input class="input--style-4" type="text" name="name" id="name" required>
			</div>
		</div>
		<div class="col-2">
			<div class="input-group">
				<label class="label" for="price">Harga Barang</label>
				<input class="input--style-4" type="text" name="price" id="price" required>
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
            <input class="input--style-4" type="file" name="pic" id="pic" onchange="prev()" accept="image/*" required>
        </div>
    </div>
    <div class="col-4">
 	<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
 </div>
</div>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OJT\resources\views/balipasadena/create.blade.php ENDPATH**/ ?>
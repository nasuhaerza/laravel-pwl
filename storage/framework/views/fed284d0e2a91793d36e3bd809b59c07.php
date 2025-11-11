

<?php $__env->startSection('title', 'Input Jabatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Tambah Jabatan</h2>
    <form action="<?php echo e(route('position_store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama Jabatan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gaji Pokok</label>
            <input type="text" name="gaji" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('position')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\NASUHA ERZA\PWL\belajar_Laravel\resources\views/backend/positions/create.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Edit Jabatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="fw-bold mb-3">Edit Data Jabatan</h4>

    <form action="<?php echo e(route('position_update', $position->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama" id="nama" value="<?php echo e(old('nama', $position->nama_jabatan)); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji Pokok</label>
            <input type="text" name="gaji" id="gaji" value="<?php echo e(old('gaji', $position->gaji_pokok)); ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo e(route('position')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\NASUHA ERZA\PWL\belajar_Laravel\resources\views/backend/positions/edit.blade.php ENDPATH**/ ?>
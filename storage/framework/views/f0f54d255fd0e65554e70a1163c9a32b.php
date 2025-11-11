

<?php $__env->startSection('title', 'Data Jabatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">Data Jabatan</h4>
    <a href="<?php echo e(route('position_create')); ?>" class="btn btn-primary btn-sm">+ Tambah Jabatan</a>
</div>


<form action="<?php echo e(route('position')); ?>" method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Cari jabatan..." value="<?php echo e(request('search')); ?>">
    <button type="submit" class="btn btn-outline-primary">Cari</button>
</form>


<?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama Jabatan</th>
                    <th>Gaji</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($position->nama_jabatan); ?></td>
                    <td><?php echo e($position->gaji_pokok); ?></td>
                    <td>

                        <a href="<?php echo e(route('position_edit', $position->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('position_delete', $position->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data jabatan</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\NASUHA ERZA\PWL\belajar_Laravel\resources\views/backend/positions/index.blade.php ENDPATH**/ ?>
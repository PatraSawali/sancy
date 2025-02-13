

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Education</p>
    <div class="pb-3">
        <a href="<?php echo e(route('education.create')); ?>" class="btn btn-primary btn-sm">+ Tambahkan Education</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Universitas</th>
                    <th>Nama Fakultas</th>
                    <th>Nama Prodi</th>
                    <th>IPK</th>
                    <th>Tanggal Awal</th>
                    <th>Tanggal Akhir</th>
                    <th class="col-2">Aksi</th> <!-- Adjusted column width -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($item->judul); ?></td>
                        <td><?php echo e($item->info1); ?></td>
                        <td><?php echo e($item->info2); ?></td>
                        <td><?php echo e($item->info3); ?></td>
                        <td><?php echo e($item->tgl_mulai); ?></td>
                        <td><?php echo e($item->tgl_akhir); ?></td>
                        <td>
                            <a href="<?php echo e(route('education.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda Yakin')" action="<?php echo e(route('education.destroy', $item->id)); ?>" class="d-inline" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Del</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/education/index.blade.php ENDPATH**/ ?>
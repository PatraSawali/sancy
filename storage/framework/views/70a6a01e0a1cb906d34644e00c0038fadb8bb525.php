

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Experience</p>
    <div class="pb-3"><a href="<?php echo e(route('experience.create')); ?>" class="btn btn-primary">+ Tambah Experience</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Posisi</th>
                    <th>Nama Perusahaan</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($item->judul); ?></td>
                        <td><?php echo e($item->info1); ?></td>
                        <td><?php echo e($item->tgl_mulai_indo); ?></td>
                        <td><?php echo e($item->tgl_akhir_indo); ?></td>
                        <td>
                            <a href='<?php echo e(route('experience.edit', $item->id)); ?>' class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                action="<?php echo e(route('experience.destroy', $item->id)); ?>" class="d-inline" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" type="submit" name='submit'>Del</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/dashboard/experience/index.blade.php ENDPATH**/ ?>
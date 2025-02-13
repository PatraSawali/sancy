

<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(route('pengaturanhalaman.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select name="_halaman_about" class="form-control form-control-sm">
                    <option value="">-Pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(old('_halaman_about', get_meta_value('_halaman_about')) == $item->id ? 'selected' : ''); ?>><?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select name="_halaman_interest" class="form-control form-control-sm">
                    <option value="">-Pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(old('_halaman_interest', get_meta_value('_halaman_interest')) == $item->id ? 'selected' : ''); ?>><?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Awards</label>
            <div class="col-sm-6">
                <select name="_halaman_awards" class="form-control form-control-sm">
                    <option value="">-Pilih-</option>
                    <?php $__currentLoopData = $datahalaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(old('_halaman_awards', get_meta_value('_halaman_awards')) == $item->id ? 'selected' : ''); ?>><?php echo e($item->judul); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/pengaturanhalaman/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                <div class="mb-3">
                    <?php if(get_meta_value('foto')): ?>
                        <img src="<?php echo e(asset('foto') . '/' . get_meta_value('foto')); ?>" style="max-width:100px;max-height:100px;">
                    <?php endif; ?>
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" value="<?php echo e(get_meta_value('_kota')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi" value="<?php echo e(get_meta_value('_provinsi')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" value="<?php echo e(get_meta_value('_nohp')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email" value="<?php echo e(get_meta_value('_email')); ?>">
                </div>
            </div>
            <div class="col-5">
                <h3>Media Sosial</h3>
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook" value="<?php echo e(get_meta_value('_facebook')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-sm" name="_twitter" id="_twitter" value="<?php echo e(get_meta_value('_twitter')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">LinkedIn</label>
                    <input type="text" class="form-control form-control-sm" name="_linkedin" id="_linkedin" value="<?php echo e(get_meta_value('_linkedin')); ?>">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">GitHub</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github" value="<?php echo e(get_meta_value('_github')); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/profile/index.blade.php ENDPATH**/ ?>
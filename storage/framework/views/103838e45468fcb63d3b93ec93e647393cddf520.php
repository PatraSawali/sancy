

<?php $__env->startSection('konten'); ?>
    <form action="<?php echo e(route('skill.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="language" class="form-label">PROGRAMMING LANGUAGE & TOOLS</label>
            <input class="form-control form-control-sm skill" type="text"
                name="language"
                id="language"
                aria-describedby="helpId"
                placeholder="PROGRAMMING LANGUAGE & TOOLS"
                value="<?php echo e(get_meta_value('_language')); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="workflow" class="form-label">WORKFLOW</label>
            <textarea class="form-control summernote" name="workflow" id="workflow" rows="3"><?php echo e(get_meta_value('_workflow')); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/skill/index.blade.php ENDPATH**/ ?>
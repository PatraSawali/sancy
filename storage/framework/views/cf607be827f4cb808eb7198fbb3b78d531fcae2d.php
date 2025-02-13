

<?php $__env->startSection('konten'); ?>
    <div class="pb-3">
        <a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary">
            Kembali
        </a>
    </div>
    <form action="<?php echo e(route('education.update', $data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input class="form-control form-control-sm" type="text"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="universitas"
                value="<?php echo e(old('judul', $data->judul)); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input class="form-control form-control-sm" type="text"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="nama fakultas"
                value="<?php echo e(old('info1', $data->info1)); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input class="form-control form-control-sm" type="text"
                name="info2"
                id="info2"
                aria-describedby="helpId"
                placeholder="nama prodi"
                value="<?php echo e(old('info2', $data->info2)); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input class="form-control form-control-sm" type="text"
                name="info3"
                id="info3"
                aria-describedby="helpId"
                placeholder="IPK"
                value="<?php echo e(old('info3', $data->info3)); ?>"
            >
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_mulai" value="<?php echo e(old('tgl_mulai', $data->tgl_mulai)); ?>">
                </div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_akhir" value="<?php echo e(old('tgl_akhir', $data->tgl_akhir)); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/education/edit.blade.php ENDPATH**/ ?>
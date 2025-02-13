

<?php $__env->startSection('konten'); ?>
    <div class="pb-3">
        <a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary">
        Kembali
        </a>
    </div>
    <form action="<?php echo e(route('education.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input class="form-control form-control-sm" type="text"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="universitas"
                value="<?php echo e(old('judul', session('judul'))); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input class="form-control form-control-sm" type="text"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="nama fakultas"
                value="<?php echo e(old('info1', session('info1'))); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input class="form-control form-control-sm" type="text"
                name="info2"
                id="info2"
                aria-describedby="helpId"
                placeholder="nama Prodi"
                value="<?php echo e(old('info1', session('info2'))); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input class="form-control form-control-sm" type="text"
                name="info3"
                id="info3"
                aria-describedby="helpId"
                placeholder="IPk"
                value="<?php echo e(old('info1', session('info3'))); ?>"
            >
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_mulai" value="<?php echo e(old('tgl_mulai', session('tgl_mulai'))); ?>">
                </div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_akhir" value="<?php echo e(old('tgl_akhir', session('tgl_akhir'))); ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/education/create.blade.php ENDPATH**/ ?>
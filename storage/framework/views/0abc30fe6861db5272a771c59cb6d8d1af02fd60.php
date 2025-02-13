

<?php $__env->startSection('konten'); ?>
    <div class="pb-3">
        <a href="<?php echo e(route('experience.index')); ?>" class="btn btn-secondary">
             Kembali
        </a>
    </div>
    <form action="<?php echo e(route('experience.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input class="form-control form-control-sm" type="text"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="posisi"
                value="<?php echo e(old('judul', session('judul'))); ?>"
            >
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Perusahaan</label>
            <input class="form-control form-control-sm" type="text"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="nama perusahaan"
                value="<?php echo e(old('info1', session('info1'))); ?>"
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
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control  summernote" name="isi" id="isi" rows="3"><?php echo e(old('isi', session('isi'))); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portofolio9\resources\views/dashboard/experience/create.blade.php ENDPATH**/ ?>
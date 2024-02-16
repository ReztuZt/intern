<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Data kelas</h5>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form class="row g-3" action="<?= base_url('pelatihan/tambah_kelas') ?>" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <label for="kelas_nama" class="form-label">Kelas Name</label>
                        <input type="text" class="form-control" id="kelas_nama" name="kelas_nama" required>
                        <?= form_error('kelas_nama', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>
                    <div class="col-md-6">
                        <label for="course_nama" class="form-label">Kategori</label>
                        <select class="form-control" id="course_nama" name="course_nama" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <?php foreach ($tb_pelatihan as $course) : ?>
                                <option value="<?= $course->course_nama ?>"><?= $course->course_nama ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('course_nama', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-save me-2"></i>Submit Form
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
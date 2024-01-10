<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Data Pelatihan</h5>
        </div>
        <div class="card-body">
            <form class="row g-3" action="<?= base_url('pelatihan/tambah_aksi') ?>" method="POST">

                <div class="col-md-6">
                    <label for="courseNama" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="courseNama" name="course_nama" required>
                    <?= form_error('course_nama', '<div class="invalid-tooltip">', '</div>'); ?>
                </div>

                <div class="col-md-6">
                    <label for="magangNIP" class="form-label">Magang NIP</label>
                    <input type="text" class="form-control" id="magangNIP" name="magang_nip" required>
                    <?= form_error('magang_nip', '<div class="invalid-tooltip">', '</div>'); ?>
                </div>

                <div class="col-md-12">
                    <label for="pelatihanKet" class="form-label">Pelatihan Keterangan</label>
                    <input type="text" class="form-control" id="pelatihanKet" name="pelatihan_ket" required>
                    <?= form_error('pelatihan_ket', '<div class="invalid-tooltip">', '</div>'); ?>
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
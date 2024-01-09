<div>
    <form class="needs-validation" action="<?= base_url('course/tambah_aksi') ?>" method="POST">

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Course Name</label>
                <input type="text" class="form-control" id="validationTooltip01" name="course_nama" required>
                <?= form_error('course_nama', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Magang NIP</label>
                <input type="text" class="form-control" id="validationTooltip02" name="magang_nip" required>
                <?= form_error('magang_nip', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Pelatihan Keterangan</label>
                <input type="text" class="form-control" id="validationTooltip03" name="pelatihan_ket" required>
                <?= form_error('pelatihan_ket', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Submit form</button>
    </form>
</div>
</div>
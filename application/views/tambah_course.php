<div>
    <form class="needs-validation" action="<?= base_url('course/tambah_aksi') ?>" method="POST">

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Course Name</label>
                <input type="text" class="form-control" id="validationTooltip01" name="course_nama" required>
                <?= form_error('course_nama', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Course Date</label>
                <input type="date" class="form-control" id="validationTooltip02" name="course_tanggal" required>
                <?= form_error('course_tanggal', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Course Quantity</label>
                <input type="number" class="form-control" id="validationTooltip03" name="course_jumlah" required>
                <?= form_error('course_jumlah', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Keterangan</label>
                <input type="text" class="form-control" id="validationTooltip04" name="course_ket" required>
                <?= form_error('course_ket', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip05">Course Description</label>
                <textarea class="form-control" id="validationTooltip05" name="course_deskripsi" required></textarea>
                <?= form_error('course_deskripsi', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip06">Course Mentor</label>
                <input type="text" class="form-control" id="validationTooltip06" name="course_mentor" required>
                <?= form_error('course_mentor', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip07">Course Price</label>
                <input type="number" class="form-control" id="validationTooltip07" name="course_harga" required>
                <?= form_error('course_harga', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Submit form</button>
    </form>
</div>
</div>
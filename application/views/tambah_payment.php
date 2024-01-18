<div>
    <form class="needs-validation" action="<?= base_url('payment/tambah_aksi') ?>" method="POST">

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Nip</label>
                <select class="form-control" id="validationTooltip01" name="magang_nip" required>
                    <option value="" selected>Pilih NIP</option>
                    <?php foreach ($tb_magang as $peserta) : ?>
                        <option value="<?= $peserta->magang_nip ?>"><?= $peserta->magang_nip ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('magang_nip', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>


            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Tanggal</label>
                <input type="date" class="form-control" id="validationTooltip02" name="payment_date" required>
                <?= form_error('payment_date', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Status Pembayaran</label>
                <select class="form-control" id="validationTooltip03" name="payment_status" required>
                    <option value="0">Menunggu...</option>
                    <option value="1">Tanggapan...</option>
                    <option value="2">Proses...</option>
                    <option value="3">Terselesaikan</option>
                </select>
                <?= form_error('payment_status', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Catatan</label>
                <input type="text" class="form-control" id="validationTooltip04" name="payment_catatan" required>
                <?= form_error('payment_catatan', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip05">Metode Pembayaran</label>
                <select class="form-control" id="validationTooltip05" name="payment_metode" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="Bank Mandiri">Bank Mandiri</option>
                    <option value="Bank BNI">Bank BNI</option>
                    <option value="Bank BRI">Bank BRI</option>
                    <option value="Dana">Dana</option>
                    <option value="Ovo">Ovo</option>
                    <option value="Indomaret/i.saku">Indomaret/i.saku</option>
                    <option value="Alfamart/Alfamidi/Dan+Dan">Alfamart/Alfamidi/Dan+Dan</option>
                </select>
                <?= form_error('payment_metode', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
        </div>
        <?php echo form_open_multipart('payment/upload_payment'); ?>
        <div class="form-row">
            
            <div class="col-md-6 mb-3">
                <label for="validationTooltip06">File</label>
                <input type="file" class="form-control" id="validationTooltip06" name="payment_file" required>
                <?php echo form_error('payment_file', '<div class="invalid-tooltip">', '</div>'); ?>
            </div>
           
           
            <!-- <div class="col-md-6 mb-3">
                <label for="validationTooltip07">Course Price</label>
                <input type="number" class="form-control" id="validationTooltip07" name="course_harga" required>
                <?= form_error('course_harga', '<div class="invalid-tooltip">', '</div>'); ?>
            </div> -->
        </div>

        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Submit form</button>
        <?php echo form_close(); ?>
    </form>
</div>
</div>
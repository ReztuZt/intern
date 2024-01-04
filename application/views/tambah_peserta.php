<form action="<?= base_url('peserta/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="magang_nama" class="form-control">
        <?= form_error('magang_nama', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="magang_email" class="form-control">
        <?= form_error('magang_email', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="magang_telp" class="form-control">
        <?= form_error('magang_telp', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="magang_alamat" class="form-control">
        <?= form_error('magang_alamat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Status</label>
        <input type="text" name="status_nama" class="form-control">
        <?= form_error('status_nama', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
    <button type="reset" class="btn btn-primary"><i class="fas fa-trash"></i>Resset</button>
</form>

<div class="card">
    <div class="card-header">

        <button data-toggle="modal" data-target="#edit" class="btn btn-success btn-sm" title="Tambah Pelatihan">
            <i class="fas fa-plus"></i> Tambah Status
        </button>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center" style="background-color: #007bff; color: #fff;">
                        <th>No</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($status as $ssw) : ?>
                        <tr class="text-center highlight-row" data-href="<?= base_url('status/detail/' . $ssw->status_id) ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $ssw->status_nama ?></td>
                            <td><?= $ssw->status_ket ?></td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="modal" data-target="#editp<?= $ssw->status_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                    <a href="<?= base_url('status/delete/' . $ssw->status_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    <!-- <a href="<?= base_url('status/info/' . rawurlencode($ssw->course_code)) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Info</a> -->
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
            <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Status
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #fff;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="<?= base_url('status/tambah_aksi/') ?>" method="POST">
                    <div class="col-md-12">
                        <label for="statusNama" class="form-label">Status</label>
                        <input type="text" class="form-control" id="statusNama" name="status_nama" required>
                        <?= form_error('status_nama', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>

                    <div class="col-md-12">
                        <label for="statusKet" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="statusKet" name="status_ket" required>
                        <?= form_error('status_ket', '<div class="invalid-tooltip">', '</div>'); ?>
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





<?php foreach ($status as $ssw) : ?>
    <div class="modal fade" id="editp<?= $ssw->status_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-edit me-2"></i> Edit Status
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #fff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('status/edit_aksi/' . $ssw->status_id) ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="statusNama">Status</label>
                                    <input type="text" name="status_nama" class="form-control" value="<?= $ssw->status_nama ?>">
                                    <?= form_error('status_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status_ket">Keterangan</label>
                                    <input type="text" name="status_ket" class="form-control" value="<?= $ssw->status_ket ?>">
                                    <?= form_error('status_ket', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <!-- Add more fields as needed -->
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-2"></i> Simpan</button>
                            <button type="reset" class="btn btn-secondary"><i class="fas fa-trash me-2"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>




</div>
<script>
    function redirectToInfo(courseName) {
        var url = '<?= base_url('status/info/') ?>' + courseName;
        window.location.href = url;
    }
</script>
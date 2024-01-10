<div class="card">
    <div class="card-header">
        <button data-toggle="modal" data-target="#edit" class="btn btn-success btn-sm" title="Tambah Pelatihan">
    <i class="fas fa-plus"></i> Tambah Pelatihan
</button>


    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>No</th>

                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pelatihan as $ssw) : ?>
                        <tr class="text-center highlight-row" data-href="<?= base_url('course/detail/' . $ssw->pelatihan_id) ?>">
                            <td><?= $no++ ?></td>

                            <td><?= $ssw->course_nama ?></td>
                            <td><?= $ssw->pelatihan_ket ?></td>
                            <td>
                                <div class="btn-group">
                                <button data-toggle="modal" data-target="#editp<?= $ssw->pelatihan_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                    <a href="<?= base_url('pelatihan/delete/' . $ssw->pelatihan_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    <!-- <a href="<?= base_url('pelatihan/info') ?>" class="btn btn-info"><i class="fas fa-info-circle"></i> Info</a> -->

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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pelatihan/tambah_aksi/') ?>" method="POST">
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

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                        <button type="reset" class="btn btn-primary"><i class="fas fa-trash"></i>Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php foreach ($pelatihan as $ssw) : ?>
    <div class="modal fade" id="editp<?= $ssw->pelatihan_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Pelatihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pelatihan/edit_aksi/' . $ssw->pelatihan_id) ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- First Column -->
                                <div class="form-group">
                                    <label>Nama Pelatihan</label>
                                    <input type="text" name="course_nama" class="form-control" value="<?= $ssw->course_nama ?>">
                                    <?= form_error('course_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Magang NIP</label>
                                    <input type="text" name="magang_nip" class="form-control" value="<?= $ssw->magang_nip ?>">
                                    <?= form_error('magang_nip', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Pelatihan Keterangan</label>
                                    <input type="text" name="pelatihan_ket" class="form-control" value="<?= $ssw->pelatihan_ket ?>">
                                    <?= form_error('pelatihan_ket', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <!-- Tambahkan input lainnya sesuai dengan kolom yang ada pada tb_pelatihan -->
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                            <button type="reset" class="btn btn-primary"><i class="fas fa-trash"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>



</div>
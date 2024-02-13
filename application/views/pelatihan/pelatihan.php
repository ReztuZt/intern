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
                    <tr class="text-center" style="background-color: #007bff; color: #fff;">
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
                                    <a href="<?= base_url('pelatihan/info/' . rawurlencode($ssw->course_code)) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Info</a>
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
                    <i class="fas fa-plus-circle me-2"></i> Tambah Data Pelatihan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #fff;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="<?= base_url('pelatihan/tambah_aksi/') ?>" method="POST">
                    <div class="col-md-12">
                        <label for="courseNama" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="courseNama" name="course_nama" required>
                        <?= form_error('course_nama', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>

                    <!-- <div class="col-md-12">
                        <label for="magangNIP" class="form-label">Magang NIP</label>
                        <input type="text" class="form-control" id="magangNIP" name="magang_nip" required>
                        <?= form_error('magang_nip', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div> -->

                    <div class="col-md-12">
                        <label for="pelatihanKet" class="form-label">Pelatihan Keterangan</label>
                        <input type="text" class="form-control" id="pelatihanKet" name="pelatihan_ket" required>
                        <?= form_error('pelatihan_ket', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="pelatihanKet" class="form-label">Course Code</label>
                        <input type="text" class="form-control" id="course_code" name="course_code" required>
                        <?= form_error('course_code', '<div class="invalid-tooltip">', '</div>'); ?>
                    </div>


                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary" type="submit" style="width: 100%;">
                            <i class="fas fa-save me-2"></i> Submit Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php foreach ($pelatihan as $ssw) : ?>
    <div class="modal fade" id="editp<?= $ssw->pelatihan_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-edit me-2"></i> Edit Data Pelatihan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #fff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pelatihan/edit_aksi/' . $ssw->pelatihan_id) ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="courseNama">Nama Pelatihan</label>
                                    <input type="text" name="course_nama" class="form-control" value="<?= $ssw->course_nama ?>">
                                    <?= form_error('course_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="magangNIP">Magang NIP</label>
                                    <input type="text" name="magang_nip" class="form-control" value="<?= $ssw->magang_nip ?>">
                                    <?= form_error('magang_nip', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pelatihan_ket">Pelatihan Keterangan</label>
                                    <input type="text" name="pelatihan_ket" class="form-control" value="<?= $ssw->pelatihan_ket ?>">
                                    <?= form_error('pelatihan_ket', '<div class="text-small text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pelatihan_ket">Course Code</label>
                                <input type="text" name="course_code" class="form-control" value="<?= $ssw->course_code ?>">
                                <?= form_error('course_code', '<div class="text-small text-danger">', '</div>'); ?>
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
        var url = '<?= base_url('pelatihan/info/') ?>' + courseName;
        window.location.href = url;
    }
</script>
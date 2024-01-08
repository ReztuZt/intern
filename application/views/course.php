</div>


</div>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('course/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Course</a>
        <!-- <h3 class="card-title">Data Peserta Magang Manimonki</h3> -->

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>

                        <th>Mentor</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($course as $ssw) : ?>
                    <tbody>
                        <tr class="text-center highlight-row" data-href="<?= base_url('course/detail/' . $ssw->course_id) ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $ssw->course_nama ?></td>
                            <td><?= $ssw->course_deskripsi ?></td>
                            <td><?= $ssw->course_tanggal ?></td>
                            <td><?= $ssw->course_jumlah ?></td>

                            <td><?= $ssw->course_mentor ?></td>
                            <td><?= $ssw->course_harga ?></td>
                            <td><?= $ssw->course_ket ?></td>

                            <td>
                                <button data-toggle="modal" data-target="#edit<?= $ssw->course_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <a href="<?= base_url('course/delete/' . $ssw->course_id) ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>

        <!-- Modal -->
        <?php foreach ($course as $ssw) : ?>
            <div class="modal fade" id="edit<?= $ssw->course_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Peserta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('course/edit_aksi/' . $ssw->course_id) ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- First Column -->
                                        <div class="form-group">
                                            <label>Nama Course</label>
                                            <input type="text" name="course_nama" class="form-control" value="<?= set_value('course_nama', $ssw->course_nama) ?>">
                                            <?= form_error('course_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Course</label>
                                            <input type="date" name="course_tanggal" class="form-control" value="<?= set_value('course_tanggal', $ssw->course_tanggal) ?>">
                                            <?= form_error('course_tanggal', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Course</label>
                                            <input type="number" name="course_jumlah" class="form-control" value="<?= set_value('course_jumlah', $ssw->course_jumlah) ?>">
                                            <?= form_error('course_jumlah', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="course_ket" class="form-control" value="<?= set_value('course_ket', $ssw->course_ket) ?>">
                                            <?= form_error('course_ket', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Course</label>
                                            <textarea name="course_deskripsi" class="form-control"><?= set_value('course_deskripsi', $ssw->course_deskripsi) ?></textarea>
                                            <?= form_error('course_deskripsi', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Mentor Course</label>
                                            <input type="text" name="course_mentor" class="form-control" value="<?= set_value('course_mentor', $ssw->course_mentor) ?>">
                                            <?= form_error('course_mentor', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Course</label>
                                            <input type="number" name="course_harga" class="form-control" value="<?= set_value('course_harga', $ssw->course_harga) ?>">
                                            <?= form_error('course_harga', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Second Column -->
                                        <!-- Tambahkan input lainnya sesuai field di tb_course -->
                                    </div>
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
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('peserta/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Peserta </a>
        <!-- <h3 class="card-title">Data Peserta Magang Manimonki</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($peserta as $ssw) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->magang_nama ?></td>
                        <td><?= $ssw->magang_email ?>
                        </td>
                        <td><?= $ssw->magang_telp ?></td>
                        <td><?= $ssw->magang_alamat ?></td>
                        <td><?= $ssw->status_nama ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->id_magang ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
   
<?php foreach($peserta as $ssw): ?>
    <div class="modal fade" id="edit<?= $ssw->id_magang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('peserta/edit_aksi/' . $ssw->id_magang) ?>" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="magang_nama" class="form-control" value="<?= $ssw->magang_nama ?>">
                            <?= form_error('magang_nama', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="magang_email" class="form-control" value="<?= $ssw->magang_email ?>">
                            <?= form_error('magang_email', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="magang_telp" class="form-control" value="<?= $ssw->magang_telp ?>">
                            <?= form_error('magang_telp', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="magang_alamat" class="form-control" value="<?= $ssw->magang_alamat ?>">
                            <?= form_error('magang_alamat', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status_nama" class="form-control" value="<?= $ssw->status_nama ?>">
                            <?= form_error('status_nama', '<div class="text-small text-danger">', '</div>'); ?>
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



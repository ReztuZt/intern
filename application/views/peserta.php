</div>


</div>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('peserta/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Peserta </a>
        <!-- <h3 class="card-title">Data Peserta Magang Manimonki</h3> -->

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center" style="background-color: #007bff; color: #fff;">
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Ttl</th>
                        <th>No Telepon</th>
                        <th>Agama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Ktp</th>
                        <th>Portofolio</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($peserta as $ssw) : ?>
                    <tbody>
                        <tr class="text-center highlight-row" data-href="<?= base_url('peserta/detail/' . $ssw->id_magang) ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $ssw->magang_nip ?></td>
                            <td><?= $ssw->magang_nama ?></td>
                            <td><?= $ssw->magang_email ?></td>
                            <td><?= $ssw->magang_ttl ?></td>
                            <td><?= $ssw->magang_telp ?></td>
                            <td><?= $ssw->magang_agama ?></td>
                            <td><?= $ssw->magang_gender ?></td>
                            <td><?= $ssw->magang_alamat ?></td>
                            <td><?= $ssw->magang_kota ?></td>
                            <td><?= $ssw->magang_kodepos ?></td>
                            <td><?= $ssw->magang_ktp ?></td>
                            <td><?= $ssw->magang_portofolio ?></td>
                            <td><?= $ssw->magang_payment ?></td>
                            <td><?= $ssw->status_nama ?></td>
                            <td>
                                <button data-toggle="modal" data-target="#edit<?= $ssw->id_magang ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <a href="<?= base_url('peserta/delete/' . $ssw->id_magang) ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>

        <script>
            $(document).ready(function() {
                $('#example1').DataTable();
            });
        </script>


        <style>
            /* Add this internal CSS to your existing styles */
            .table tr.highlight-row:hover {
                background-color: #F6F6F6;
                /* Change the background color as desired */
                cursor: pointer;
            }
        </style>

        <script>
            $(document).ready(function() {
                $(".highlight-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
        </script>





        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> -->

        <!-- Modal -->

        <?php foreach ($peserta as $ssw) : ?>
            <div class="modal fade" id="edit<?= $ssw->id_magang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                        <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fas fa-edit me-2"></i> Edit Peserta
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: #fff;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('peserta/edit_aksi/' . $ssw->id_magang) ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- First Column -->
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="magang_nip" class="form-control" value="<?= $ssw->magang_nip ?>">
                                            <?= form_error('magang_nip', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
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
                                            <label>TTL</label>
                                            <input type="text" name="magang_ttl" class="form-control" value="<?= $ssw->magang_ttl ?>">
                                            <?= form_error('magang_ttl', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input type="text" name="magang_agama" class="form-control" value="<?= $ssw->magang_agama ?>">
                                            <?= form_error('magang_agama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <!-- Add more fields as needed -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Second Column -->
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input type="text" name="magang_gender" class="form-control" value="<?= $ssw->magang_gender ?>">
                                            <?= form_error('magang_gender', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" name="magang_kota" class="form-control" value="<?= $ssw->magang_kota ?>">
                                            <?= form_error('magang_kota', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="text" name="magang_kodepos" class="form-control" value="<?= $ssw->magang_kodepos ?>">
                                            <?= form_error('magang_kodepos', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>KTP</label>
                                            <input type="text" name="magang_ktp" class="form-control" value="<?= $ssw->magang_ktp ?>">
                                            <?= form_error('magang_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Portofolio</label>
                                            <input type="text" name="magang_portofolio" class="form-control" value="<?= $ssw->magang_portofolio ?>">
                                            <?= form_error('magang_portofolio', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <input type="text" name="magang_payment" class="form-control" value="<?= $ssw->magang_payment ?>">
                                            <?= form_error('magang_payment', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status_nama" class="form-control">
                                                <option value="Active" <?= ($ssw->status_nama == 'Active') ? 'selected' : '' ?>>Active</option>
                                                <option value="Pending" <?= ($ssw->status_nama == 'Pending') ? 'selected' : '' ?>>Pending</option>
                                            </select>
                                            <?= form_error('status_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Course Nama</label>
                                            <input type="text" name="course_nama" class="form-control" value="<?= $ssw->course_nama ?>">
                                            <?= form_error('course_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <!-- Add more fields as needed -->
                                    </div>
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
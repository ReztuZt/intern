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
                        <!-- <th>Agama</th> -->
                        <!-- <th>Gender</th> -->
                        <th>Alamat</th>
                        <!-- <th>Kota</th> -->
                        <!-- <th>Kode Pos</th> -->
                        <!-- <th>Ktp</th> -->
                        <!-- <th>Portofolio</th> -->
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
                            <!-- <td><?= $ssw->magang_agama ?></td>
                            <td><?= $ssw->magang_gender ?></td> -->
                            <td><?= $ssw->magang_alamat ?></td>
                            <!-- <td><?= $ssw->magang_kota ?></td>
                            <td><?= $ssw->magang_kodepos ?></td>
                            <td><?= $ssw->magang_ktp ?></td>
                            <td><?= $ssw->magang_portofolio ?></td> -->
                            <td><?= $ssw->magang_payment ?></td>
                            <td><?= $ssw->status_nama ?></td>
                            <td>
                                <button data-toggle="modal" data-target="#edit<?= $ssw->id_magang ?>" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i></button>
                                <button data-toggle="modal" data-target="#detail<?= $ssw->id_magang ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                                <a href="<?= base_url('peserta/delete/' . $ssw->id_magang) ?>" class="btn btn-warning btn-sm m-1" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash"></i></a>
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
                                            <label for="magang_agama">Agama</label>
                                            <select name="magang_agama" class="form-control">
                                                <option value="" disabled selected >Pilih Agama</option>
                                                <option value="Islam" <?= $ssw->magang_agama == "Islam" ? 'selected' : '' ?>>Islam</option>
                                                <option value="Kristen Protestan" <?= $ssw->magang_agama == "Kristen Protestan" ? 'selected' : '' ?>>Kristen Protestan</option>
                                                <option value="Kristen Katolik" <?= $ssw->magang_agama == "Kristen Katolik" ? 'selected' : '' ?>>Kristen Katolik</option>
                                                <option value="Hindu" <?= $ssw->magang_agama == "Hindu" ? 'selected' : '' ?>>Hindu</option>
                                                <option value="Buddha" <?= $ssw->magang_agama == "Buddha" ? 'selected' : '' ?>>Buddha</option>
                                                <option value="Khonghucu" <?= $ssw->magang_agama == "Khonghucu" ? 'selected' : '' ?>>Khonghucu</option>
                                                <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                                            </select>
                                            <?= form_error('magang_agama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Course code</label>
                                            <input type="text" name="course_code" class="form-control" value="<?= $ssw->course_code ?>">
                                            <?= form_error('course_code', '<div class="text-small text-danger">', '</div>'); ?>
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
                                            <label for="status_nama">Status</label>
                                            <select name="status_nama" class="form-control">
                                                <option value=""><?= $status->status_nama ?></option>
                                                <?php foreach ($tb_status as $status) : ?>
                                                    <option value="<?= $status->status_nama ?>"><?= $status->status_nama ?></option>
                                                <?php endforeach; ?>
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

        <?php foreach ($peserta as $ssw) : ?>
            <div class="modal fade" id="detail<?= $ssw->id_magang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                        <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fas fa-edit me-2"></i> Detail Peserta
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: #fff;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>NIP:</strong> <?= $ssw->magang_nip ?></p>
                                    <p><strong>NAMA:</strong> <?= $ssw->magang_nama ?></p>
                                    <p><strong>EMAIL:</strong> <?= $ssw->magang_email ?></p>
                                    <p><strong>TTL:</strong> <?= $ssw->magang_ttl ?></p>
                                    <p><strong>No.TLPN:</strong> <?= $ssw->magang_telp ?></p>
                                    <p><strong>AGAMA:</strong> <?= $ssw->magang_agama ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>GENDER:</strong> <?= $ssw->magang_gender ?></p>
                                    <p><strong>ALAMAT:</strong> <?= $ssw->magang_alamat ?></p>
                                    <p><strong>KOTA:</strong> <?= $ssw->magang_kota ?></p>
                                    <p><strong>KODE POS:</strong> <?= $ssw->magang_kodepos ?></p>
                                    <p><strong>KTP:</strong> <?= $ssw->magang_ktp ?></p>
                                    <p><strong>PORTOFOLIO:</strong> <?= $ssw->magang_portofolio ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><strong>PAYMENT:</strong> <?= $ssw->magang_payment ?></p>
                                    <p><strong>STATUS:</strong> <?= $ssw->status_nama ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
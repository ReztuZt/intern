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
                            <!-- <td><?= $ssw->course_nama ?></td>
                            <td><?= $ssw->kelaskategori ?></td> -->
                            <td>
                                <button data-toggle="modal" data-target="#edit<?= $ssw->id_magang ?>" class="btn btn-warning btn-sm m-1"><i class="fas fa-edit"></i></button>
                                <button data-toggle="modal" data-target="#detail<?= $ssw->id_magang ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                                <!-- <a href="<?= base_url('peserta/detail/' . $ssw->id_magang) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></a> -->
                                <a href="<?= base_url('peserta/delete/' . $ssw->id_magang) ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash-alt"></i></a>
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
            <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan kelas modal-lg di sini -->
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
                                    <div class="col-md-4">
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
                                            <label>Telepon</label>
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
                                                <option value="<?= $ssw->magang_agama ?>" selected><?= $ssw->magang_agama ?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                                <!-- Tambahkan opsi agama lainnya sesuai kebutuhan -->
                                            </select>
                                            <?= form_error('magang_agama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="course_code">Course code</label>
                                            <input type="text" name="course_code" class="form-control" value="<?= $ssw->course_code ?>">
                                            <?= form_error('course_code', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div> -->

                                        <!-- Add more fields as needed -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Second Column -->
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="magang_gender" class="form-control">
                                                <option value="<?= $ssw->magang_gender ?>" selected><?= $ssw->magang_gender ?></option>
                                                <option value="Pria">Pria</option>
                                                <option value="Prempuan">Prempuan</option>
                                            </select>
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
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <input type="text" name="magang_payment" class="form-control" value="<?= $ssw->magang_payment ?>">
                                            <?= form_error('magang_payment', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="status_nama">Status</label>
                                            <select name="status_nama" class="form-control">
                                                <option value="<?= $ssw->status_nama ?>"><?= $ssw->status_nama ?></option> <!-- Menampilkan status awal -->
                                                <?php foreach ($tb_status as $status) : ?>
                                                    <option value="<?= $status->status_nama ?>"><?= $status->status_nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('status_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Course Nama</label>
                                            <select name="course_nama" class="form-control">
                                                <option value="<?= $ssw->course_nama ?>"><?= $ssw->course_nama ?></option> <!-- Menampilkan status awal -->
                                                <?php foreach ($tb_course as $status) : ?>
                                                    <option value="<?= $status->course_nama ?>"><?= $status->course_nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('course_nama', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelaskategori">Kategori & Kelas</label>
                                            <select name="kelaskategori" class="form-control">
                                                <option value="<?= $ssw->kelaskategori ?>"><?= $ssw->kelaskategori ?></option>
                                                <?php foreach ($tb_kelas as $kelaskategori) : ?>
                                                    <option value="<?= $kelaskategori->course_nama . ' | ' . ($kelaskategori->kelas_nama ?? '') ?>"><?= $kelaskategori->course_nama . ' | ' . ($kelaskategori->kelas_nama ?? '') ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('kelaskategori', '<div class="text-small text-danger">', '</div>'); ?>
                                        </div>
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


            <!-- Default box -->
            <div class="modal fade" id="detail<?= $ssw->id_magang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Tambahkan kelas modal-lg di sini -->
                    <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                        <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fas fa-detail me-2"></i> Detail Peserta
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: #fff;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input NIP -->
                                    <div class="form-group">
                                        <label for="inputNIP">NIP</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_nip ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNIP">Nama</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_nama ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNIP">Email</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_email ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNIP">TTL</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_ttl ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNIP">Telpon</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_telp ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNIP">Agama</label>
                                        <input type="text" id="inputNIP" class="form-control" value="<?= $ssw->magang_agama ?>" readonly>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <!-- Input Nama -->
                                    <div class="form-group">
                                        <label for="inputNama">Gender</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_gender ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Alamat</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_alamat ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Kota</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_kota ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Kode Pos</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_kodepos ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">KTP</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_ktp ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Portofolio</label>
                                        <input type="text" id="inputNama" class="form-control" value="<?= $ssw->magang_portofolio ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Input Email -->
                                    <div class="form-group">
                                        <label for="inputEmail">Payment</label>
                                        <input type="text" id="inputEmail" class="form-control" value="<?= $ssw->magang_payment ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Status</label>
                                        <input type="text" id="inputEmail" class="form-control" value="<?= $ssw->status_nama ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Status</label>
                                        <input type="text" id="inputEmail" class="form-control" value="<?= $ssw->kelaskategori ?>" readonly>
                                    </div>
                                </div>
                                <!-- Tambahan input lainnya -->
                            </div>
                        </div>
                        <!-- /.modal-body -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        <?php endforeach; ?>


    </div>
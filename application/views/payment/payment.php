</div>


</div>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('payment/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Payment</a>
        <!-- <h3 class="card-title">Data Peserta Magang Manimonki</h3> -->

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php if (isset($payment) && !empty($payment)) : ?>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center" style="background-color: #007bff; color: #fff;">
                            <th>No</th>
                            <th>Nip</th>
                            <th>Metode Pembayaran</th>
                            <th>Status</th>
                            <th>Catatan</th>
                            <th>Tanggal</th>
                            <th>File</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($payment as $ssw) : ?>
                        <tbody>
                            <tr class="text-center highlight-row" data-href="<?= base_url('payment/detail/' . $ssw->payment_id) ?>">
                                <td><?= $no++ ?></td>
                                <td><?= $ssw->magang_nip ?></td>
                                <td><?= $ssw->payment_metode ?></td>
                                <td>
                                    <?php
                                    $statusBadge = '';
                                    switch ($ssw->payment_status) {
                                        case '0':
                                            $statusBadge = '<span class="badge badge-warning"> Menunggu...</span>';
                                            break;
                                        case '1':
                                            $statusBadge = '<span class="badge badge-info"> Tanggapan...</span>';
                                            break;
                                        case '2':
                                            $statusBadge = '<span class="badge badge-success"> Proses...</span>';
                                            break;
                                        case '3':
                                            $statusBadge = '<span class="badge badge-danger"> Terselesaikan</span>';
                                            break;
                                        default:
                                            $statusBadge = '<span class="badge badge-secondary"> Tidak Valid</span>';
                                            break;
                                    }
                                    echo $statusBadge;
                                    ?>
                                </td>
                                <td><?= $ssw->payment_catatan ?></td>
                                <td><?= $ssw->payment_date ?></td>
                                <td><?= $ssw->payment_file ?></td>
                                <td>
                                    <!-- <a href="<?= base_url('payment/detail/' . $ssw->payment_id) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</a> -->
                                    <!-- <button data-toggle="modal" data-target="#detail<?= $ssw->payment_id ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</button> -->
                                    <button data-toggle="modal" data-target="#edit<?= $ssw->payment_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                    <a href="<?= base_url('payment/delete/' . $ssw->payment_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
            </div>

            <!-- Modal -->
            <?php foreach ($payment as $ssw) : ?>
                <div class="modal fade" id="edit<?= $ssw->payment_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                            <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <i class="fas fa-edit me-2"></i> Edit Pembayaran
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: #fff;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('payment/edit_aksi/' . $ssw->payment_id) ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="magang_nip">Nip</label>
                                                <input type="text" name="magang_nip" readonly class="form-control" value="<?= set_value('magang_nip', $ssw->magang_nip) ?>">
                                                <?= form_error('magang_nip', '<div class="text-small text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="payment_date">Tanggal</label>
                                                <input type="date" name="payment_date" class="form-control" value="<?= set_value('payment_date', $ssw->payment_date) ?>">
                                                <?= form_error('payment_date', '<div class="text-small text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="payment_status">Status Pembayaran</label>
                                                <select name="payment_status" class="form-control">
                                                    <option value="0" <?= set_select('payment_status', '0', ($ssw->payment_status == '0')); ?>>Menunggu...</option>
                                                    <option value="1" <?= set_select('payment_status', '1', ($ssw->payment_status == '1')); ?>>Tanggapan...</option>
                                                    <option value="2" <?= set_select('payment_status', '2', ($ssw->payment_status == '2')); ?>>Proses...</option>
                                                    <option value="3" <?= set_select('payment_status', '3', ($ssw->payment_status == '3')); ?>>Terselesaikan</option>
                                                </select>
                                                <?= form_error('payment_status', '<div class="text-small text-danger">', '</div>'); ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="payment_catatan">Catatan</label>
                                                <input type="text" name="payment_catatan" class="form-control" value="<?= set_value('payment_catatan', $ssw->payment_catatan) ?>">
                                                <?= form_error('payment_catatan', '<div class="text-small text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
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
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="payment_file">File</label>
                                                <input type="text" name="payment_file" class="form-control" value="<?= set_value('payment_file', $ssw->payment_file) ?>">
                                                <?= form_error('payment_file', '<div class="text-small text-danger">', '</div>'); ?>
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
            <!-- Di dalam loop foreach -->
            <?php foreach ($payment as $ssw) : ?>
                <!-- Modal Detail -->
                <div class="modal fade" id="detail<?= $ssw->payment_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border: none; border-radius: 10px;">
                            <div class="modal-header" style="background-color: #007bff; color: #fff; border-radius: 10px 10px 0 0;">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <i class="fas fa-info-circle me-2"></i> Detail Pembayaran
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: #fff;">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Isi dengan konten detail -->
                                <p><strong>NIP:</strong> <?= $ssw->magang_nip ?></p>
                                <p><strong>Status Pembayaran:</strong> <?= $ssw->payment_status ?></p>

                                <?php if ($ssw->payment_file) : ?>
                                    <img src="<?= base_url('../uploads/' . $ssw->payment_file) ?>" alt="Payment File" style="max-width: 200px; max-height: 200px;">
                                <?php endif; ?>

                                <!-- Tambahkan formulir unggah gambar -->
                                <form action="<?= base_url('payment/upload_image/' . $ssw->payment_id) ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="image_upload">Unggah Gambar Baru</label>
                                        <input type="file" name="image_upload" class="form-control" size="20">
                                        <button type="submit" class="btn btn-primary mt-2">Unggah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="edit<?= $ssw->payment_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <!-- ... (bagian modal edit) ... -->
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Tidak ada data pembayaran.</p>
        <?php endif; ?>
    </div>
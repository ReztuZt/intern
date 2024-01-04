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
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('course/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Course</a>
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
                                    <button data-toggle="modal" data-target="#edit<?= $ssw->pelatihan_id ?>" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                    <a href="<?= base_url('course/delete/' . $ssw->pelatihan_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    <button data-toggle="modal" data-target="#info<?= $ssw->pelatihan_id ?>" class="btn btn-info btn-sm" title="Info"><i class="fas fa-info-circle"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
                    </div>
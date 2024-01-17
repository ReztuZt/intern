<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Status Peserta Magang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-center" style="background-color: #007bff; color: #fff;">
                        <th>Status</th>
                        <th>Daftar Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($status as $ssw) : ?>
                        <tr class="text-center">
                            <td><?= $ssw->status_nama ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?= base_url('status/info/' . $ssw->status_nama) ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Info</a>
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
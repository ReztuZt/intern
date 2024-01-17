<!-- Konten utama -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Peserta</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <!-- Tambahkan header tabel di sini -->
                                <tr class="text-center" style="background-color: #007bff; color: #fff;">
                                    <th>Nama Peserta</th>
                                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($magang_nama as $magang) : ?>
                                    <tr>
                                        <!-- Tampilkan informasi nama peserta sesuai kebutuhan -->
                                        <td><?= $magang->magang_nama; ?></td>
                                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

</div>
<!-- View untuk menampilkan data magang berdasarkan course_nama -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Peserta</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr class="text-center" style="background-color: #007bff; color: #fff;">

                    <th>Nama Peserta</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($magang_by_course as $magang) : ?>
                    <tr>

                        <td><?= $magang->magang_nama ?></td>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
</div>
<!-- View untuk menampilkan data magang berdasarkan course_nama -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Magang</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($magang_by_course as $magang) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $magang->magang_nama ?></td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

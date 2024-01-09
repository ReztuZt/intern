<!-- pelatihan_info.php -->
<div class="container">
    <h2>Data Pelatihan untuk Magang dengan NIP <?php echo $this->session->userdata('magang_nip'); ?></h2>
    
    <?php if ($pelatihan_): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Kursus</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pelatihan_info as $pelatihan): ?>
                    <tr>
                        <td><?php echo $pelatihan->cours_nama; ?></td>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada data pelatihan untuk NIP magang ini.</p>
    <?php endif; ?>
</div>

</div>
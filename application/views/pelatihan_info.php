<!-- View: pelatihan_info_view -->
<h2>Magang Data for Course</h2>

<table border="1">
    <tr>
        <th>Magang NIP</th>
        <!-- Add more columns as needed -->
    </tr>

    <?php foreach ($magang_data as $magang) : ?>
        <tr>
            <td><?= $magang->magang_nama ?></td>
            <!-- Add more cells for additional columns -->
        </tr>
    <?php endforeach; ?>
</table>


<!-- Your existing HTML and code here -->

<!-- Display Magang Nama -->
<div>
    <?php if (!empty($magang_nama)): ?>
        <h4>Magang Nama:</h4>
        <ul>
            <?php foreach ($magang_nama as $magang): ?>
                <li><?= $magang['magang_nama']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No Magang Nama found for the specified course.</p>
    <?php endif; ?>
</div>
